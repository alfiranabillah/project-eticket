<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Event;



class DashboardController extends Controller
{
    public function index(request $request)
    {
        $admins = Admin::all();
        $items = Event::all();
        return view('pages.admin.dashboard', compact('admins', 'items'));
    }
}
