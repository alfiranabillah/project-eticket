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
        return view('pages/admin/transaction');
    }
    public function ticket(request $request)
    {
        return view('pages/admin/ticket');
    }
}