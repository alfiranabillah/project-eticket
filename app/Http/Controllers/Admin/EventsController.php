<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventRequest;
use App\Models\Events;
use Illuminate\Http\Requests;
use Illuminate\Support\Str;

class EventsController extends Controller
{

    public function index()
    {
        $items =Events::all();

        return view('pages/admin/event-package/event', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {


      $data = $request->validated(); // Menggunakan data yang divalidasi

      Events::create($data);

      return redirect()->route('event-page')->with('success', 'Event created successfully!');
    }

    /**        // Mengambil data yang telah divalidasi

     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Event::findOrFail($id);
        return view('pages.admin.event-package.edit', [
            'items' => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


      $request->validate([
        // Aturan validasi di sini sesuai dengan kebutuhan aplikasi Anda
    ]);

    $data = $request->validated(); // Menggunakan data yang divalidasi
    $item = Event::findOrFail($id);
    $item->update($data);

    return redirect()->route('event-page')->with('success', 'Event updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
