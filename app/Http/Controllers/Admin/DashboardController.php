<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Event;
use App\Models\Transaction;
use App\Models\User;




class DashboardController extends Controller
{
    public function index(request $request)
    {
        $admins = Admin::all();
        $items = Event::all();
        $eventCount = Event::count();
        $salesCount = Transaction::where('status', 'settlement')->sum('amount');
        $ticketCount = Transaction::where('status', 'settlement')->sum('quantity');
        $custCount = User::count();
        return view('pages.admin.dashboard', compact('admins', 'items', 'eventCount', 'salesCount', 'ticketCount', 'custCount'));
    }
}
