<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;
use Log;

class SnapController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function index()
    {
        return view('snap.index');
    }

    public function checkout(Request $request)
{
    $request->validate([
        'amount' => 'required|numeric',
        'first_name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'event_id' => 'required|string',
    ]);

    $user = Auth::user();
    $event_id = $request->event_id;

    // Check if user already has a settled transaction for the same event
    $existingTransaction = Transaction::where('user_id', $user->id)
        ->where('event_id', $event_id)
        ->where('status', 'settlement')
        ->first();

    if ($existingTransaction) {
        return response()->json(['error' => 'Maksimal membeli satu kali'], 400);
    }

    $order_id = 'TRX' . uniqid();

    $params = [
        'transaction_details' => [
            'order_id' => $order_id,
            'gross_amount' => $request->amount,
        ],
        'customer_details' => [
            'first_name' => $request->first_name,
            'last_name' => '',
            'email' => $request->email,
            'phone' => $request->phone,
        ],
    ];

    try {
        $snapToken = Snap::getSnapToken($params);
        Log::info('Snap Token: ' . $snapToken);

        Transaction::create([
            'order_id' => $order_id,
            'amount' => $request->amount,
            'event_id' => $event_id,
            'status' => 'unpaid',
            'user_id' => $user->id,
            'quantity' => 1,
        ]);

        return response()->json(['snap_token' => $snapToken]);
    } catch (\Exception $e) {
        Log::error('Midtrans Error: ' . $e->getMessage());
        return response()->json(['error' => $e->getMessage()]);
    }
}

    public function notificationHandler(Request $request)
    {
        $payload = $request->getContent();
        $notification = json_decode($payload);
        $transaction_status = $notification->transaction_status;
        $payment_type = $notification->payment_type;
        $orderId = $notification->order_id;
        $fraud = $notification->fraud_status ?? null;

        $transaction = Transaction::where('order_id', $orderId)->first();

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        switch ($transaction_status) {
            case 'capture':
                if ($payment_type == 'credit_card') {
                    if ($fraud == 'challenge') {
                        $transaction->update(['status' => 'pending']);
                    } else {
                        $transaction->update(['status' => 'settlement']);
                        $this->decreaseTicketQuantity($transaction->event_id, $transaction->quantity);
                    }
                }
                break;

            case 'settlement':
                $transaction->update(['status' => 'settlement']);
                $this->decreaseTicketQuantity($transaction->event_id, $transaction->quantity);
                break;

            case 'pending':
                $transaction->update(['status' => 'pending']);
                break;

            case 'deny':
                $transaction->update(['status' => 'denied']);
                break;

            case 'expire':
                $transaction->update(['status' => 'expired']);
                break;

            case 'cancel':
                $transaction->update(['status' => 'canceled']);
                break;

            default:
                Log::warning('Unknown transaction status: ' . $transaction_status);
                break;
        }

        return response()->json(['message' => 'Notification handled successfully']);
    }

    private function decreaseTicketQuantity($eventId, $quantity)
    {
        $ticket = Ticket::where('id_event', $eventId)->first();

        if ($ticket) {
            $ticket->quantity = max(0, $ticket->quantity - $quantity); // Ensure quantity doesn't go below 0
            $ticket->save();
        }
    }

    public function history()
    {
        $transactions = Transaction::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.history', ['transactions' => $transactions]);
    }
}
