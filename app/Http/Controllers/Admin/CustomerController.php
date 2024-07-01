<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class CustomerController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil semua data pengguna dari database
        return view('pages.admin.users.data', compact('users')); // Mengirim data pengguna ke view
    }
}
