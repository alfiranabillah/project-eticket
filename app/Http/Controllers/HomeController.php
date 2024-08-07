<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class HomeController extends Controller
{
    public function index(Request $request) {
        $noraebangEvents = Event::where('category', 'noraebang')
        ->whereHas('ticket', function($query) {
            $query->where('quantity', '>', 0);
        })
            ->orderBy('start_date', 'asc')
            ->take(4)
            ->get();
    
        $birthdayEvents = Event::where('category', 'birthday')
        ->whereHas('ticket', function($query) {
            $query->where('quantity', '>', 0);
        })
            ->orderBy('start_date', 'asc')
            ->take(4)
            ->get();
    
        return view('pages/home', [
            'noraebangEvents' => $noraebangEvents,
            'birthdayEvents' => $birthdayEvents
        ]);
    }
    
    
    public function eventdetail(request $request){

        return View('pages/event_detail');
    }

    public function sign_in(request $request)  {

        return View('pages/login');

    }
    public function faq(request $request)  {

        return View('pages/faq');

    }
    
    public function history()
{
    // Ambil semua transaksi dengan status "settlement" dari user yang sedang login
    $orders = Transaction::where('user_id', Auth::id())
                         ->where('status', 'settlement')
                         ->orderBy('created_at', 'desc')
                         ->get();
    
    // Ambil semua tiket untuk ditampilkan di halaman
    $tickets = Ticket::all();
    
    // Data event dan tiket terkait
    $eventDetails = [];
    $ticketTimes = [];
    $ticketIds = [];
    $ticketNames = [];
    $updatedAts = [];

    foreach ($orders as $order) {
        $eventDetail = Event::where('id_event', $order->event_id)->first();
        $ticket = Ticket::where('id_event', $order->event_id)->first();
        
        $eventDetails[] = $eventDetail;
        $ticketTimes[] = $ticket ? $ticket->time : null;
        $ticketIds[] = $ticket ? $ticket->id_ticket : null;
        $ticketNames[] = $ticket ? $ticket->name_event : null;
        $updatedAts[] = Carbon::parse($order->updated_at)->format('d M Y | H:i');
    }

    return view('pages/history', [
        'tickets' => $tickets,
        'orders' => $orders,
        'eventDetails' => $eventDetails,
        'ticket_times' => $ticketTimes,
        'id_tickets' => $ticketIds,
        'ticket_names' => $ticketNames,
        'updated_ats' => $updatedAts
    ]);
}

        
        


    public function register(request $request)  {

        return View('pages/register');

    }
    public function viewhome(Request $request) {
        $items = Event::whereIn('category', ['noraebang', 'birthday'])
                      ->whereHas('ticket', function($query) {
                          $query->where('quantity', '>', 0);
                      })
                      ->orderBy('start_date', 'asc')
                      ->get();
    
        return view('pages/viewhomenor', [
            'items' => $items
        ]);
    }
    
    public function showNoraebangEvents()
    {
        // Mengambil semua event dengan kategori noraebang
        $items = Event::where('category', 'noraebang')
                      ->whereHas('ticket', function($query) {
                          $query->where('quantity', '>', 0);
                      })
                      ->orderBy('start_date', 'asc')
                      ->get();
    
        return view('pages/viewhomenor', [
            'items' => $items
        ]);
    }
    public function showBirthdayEvents()
    {
        // Mengambil semua event dengan kategori noraebang
        $items = Event::where('category', 'birthday')
        ->whereHas('ticket', function($query) {
            $query->where('quantity', '>', 0);
        })
        ->orderBy('start_date', 'asc')
        ->get();
        return view('pages/viewhomenor', [
        'items' => $items
        ]);
    }
    public function viewhomecompt(request $request)  {

        $items = Event::where('category', 'kompetisi')
                      ->whereHas('ticket', function($query) {
                          $query->where('quantity', '>', 0);
                      })
                      ->orderBy('start_date', 'asc')
                      ->get();
    
        return view('pages/viewhomenor', [
            'items' => $items
        ]);

    }
    public function show($id_event)
{
    $event = Event::findOrFail($id_event);
    $firstTicketTime = Ticket::where('id_event', $id_event)->value('time');
    return view('pages.konten', compact('event', 'firstTicketTime'));
}

}