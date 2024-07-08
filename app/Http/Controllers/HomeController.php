<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(request $request){

        $items =Event::all();
        return view('pages/home', [
            'items' => $items
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
        // Mendapatkan order_id terbaru dari transaksi user yang sedang login
        $order_id = Transaction::where('user_id', Auth::id())
                               ->orderBy('created_at', 'desc')
                               ->pluck('order_id')
                               ->first();
        $tickets =Ticket::all();

        return view('pages/history', [
            'tickets' => $tickets,
            'order_id' => $order_id
        ]);
    }
        
        


    public function register(request $request)  {

        return View('pages/register');

    }
    public function viewhome(request $request)  {

        return View('pages/viewhome');

    }
    public function viewhomenor(request $request)  {

        return View('pages/viewhomenor');

    }
    public function viewhomebday(request $request)  {

        return View('pages/viewhomebday');

    }
    public function viewhomecompt(request $request)  {

        return View('pages/viewhomecompt');

    }
    public function konten(request $request)  {

        return View('pages/konten');

    }






}
