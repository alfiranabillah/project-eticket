<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function index()
    {
        $organizers = Organizer::all(); // Mengambil semua data pengguna dari database
        return view('pages.admin.organizer.page', compact('organizers')); // Mengirim data pengguna ke view
    }
    public function create()
    {
        $organizers = Organizer::all();
        return view('pages.admin.organizer.create', compact('organizers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
        ]);

        Organizer::create($data);
        return redirect()->route('organizer-page')->with('success', 'Ticket created successfully!');
    }

    public function edit(string $id)
    {
        $organizer = Organizer::findOrFail($id);
        return view('pages.admin.organizer.edit', [
            'organizer' => $organizer
        ]);
    }

    public function update(Request $request, string $id)
{
    $request->validate([
           'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
    ]);

    $organizer = Organizer::findOrFail($id);
    $data = $request->all();

    $organizer->update($data);

    return redirect()->route('organizer-page')->with('success', 'Ticket updated successfully!');
}

    public function destroy($id)
    {
        $organizer = Organizer::findOrFail($id);
        $organizer->delete();
        return redirect()->route('organizer-page')->with('success', 'Transaction deleted successfully!');
    }



}

