<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;
use Log;
use Illuminate\Support\Facades\Auth;



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
        $order_id = 'TRX' . uniqid();
        $user = Auth::user();

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
                'status' => 'unpaid',
                'user_id' => $user->id, // Simpan user_id
                'quantity' => 1, // Jumlah tiket yang dibeli, maksimal selalu 1
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

        if ($transaction_status == 'capture') {
            if ($payment_type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $transaction->update(['status' => 'pending']);
                } else {
                    $transaction->update(['status' => 'settlement']);
                }
            }
        } elseif ($transaction_status == 'settlement') {
            $transaction->update(['status' => 'settlement']);
        } elseif ($transaction_status == 'pending') {
            $transaction->update(['status' => 'pending']);
        } elseif ($transaction_status == 'deny') {
            $transaction->update(['status' => 'denied']);
        } elseif ($transaction_status == 'expire') {
            $transaction->update(['status' => 'expired']);
        } elseif ($transaction_status == 'cancel') {
            $transaction->update(['status' => 'canceled']);
        }

        return response()->json(['message' => 'Notification handled successfully']);
    }

    public function history()
    {
    // Mendapatkan order_id terbaru dari transaksi user yang sedang login
    $order_id = Transaction::where('user_id', Auth::id())
                           ->orderBy('created_at', 'desc')
                           ->pluck('order_id')
                           ->first();

    return view('pages.history', ['order_id' => $order_id]);
    }

}
