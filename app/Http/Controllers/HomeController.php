<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class HomeController extends Controller
{
    public function index(request $request){

        $items =Events::all();

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
    public function history(request $request)  {

        return View('pages/history');

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
