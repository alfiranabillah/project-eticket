<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $admins = Admin::all(); // Mengambil semua data pengguna dari database
        return view('pages.admin.pengguna.data', compact('admins')); // Mengirim data pengguna ke view
    }
    public function create()
    {
        $admins = Admin::all();
        return view('pages.admin.pengguna.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
        ]);

        Admin::create($data);
        return redirect()->route('admin.pengguna.data')->with('success', 'Ticket created successfully!');
    }

    public function edit(string $id)
    {
        $admin = Admin::findOrFail($id);
        return view('pages.admin.pengguna.edit', [
            'admin' => $admin
        ]);
    }


    public function update(Request $request, string $id)
{
    $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
    ]);

    $admin = Admin::findOrFail($id);
    $data = $request->all();

    $admin->update($data);

    return redirect()->route('admin.pengguna.data')->with('success', 'Ticket updated successfully!');
}

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('admin.pengguna.data')->with('success', 'Transaction deleted successfully!');
    }
}
