<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil semua data pengguna dari database
        return view('pages.admin.users.data', compact('users')); // Mengirim data pengguna ke view
    }
    public function create()
    {
        $users = User::all();
        return view('pages.admin.users.create', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
        ]);

        User::create($data);
        return redirect()->route('admin.users.data')->with('success', 'Ticket created successfully!');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.users.edit', [
            'user' => $user
        ]);
    }


    public function update(Request $request, string $id)
{
    $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
    ]);

    $user = User::findOrFail($id);
    $data = $request->all();

    $user->update($data);

    return redirect()->route('admin.users.data')->with('success', 'Ticket updated successfully!');
}

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users.data')->with('success', 'Transaction deleted successfully!');
    }
}
