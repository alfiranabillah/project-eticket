<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event(request $request)
    {
        return view('pages/admin/event');
    }
    public function transaction(request $request)
    {
        return view('pages/admin/transactions/order');
    }
    public function ticket(request $request)
    {
        return view('pages/admin/ticket');
    }
    public function organizer(request $request)
    {
        return view('pages/admin/organizer');
    }
    public function user(request $request)
    {
        return view('pages/admin/user/data');
    }
}