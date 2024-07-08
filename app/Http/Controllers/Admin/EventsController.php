<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventRequest;
use App\Models\Event;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    public function index()
    {
        $items = Event::all();

        return view('pages/admin/event-package/event', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan form create jika diperlukan
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $data = $request->validated();

        // Generate unique event_id with format EVT(unique)
        $data['id_event'] = 'EVT' . Str::upper(mt_rand(100000, 999999));

        // Handle file upload (poster)
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $data['poster'] = $fileName;
        }

        Event::create($data);

        return redirect()->route('event-page')->with('success', 'Event created successfully!');
    }

    public function edit(string $id)
    {
        $item = Event::findOrFail($id);
        return view('pages.admin.event-package.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0|max:500000',
            'location' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'start_date' => 'required|date',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string|max: 500',
            'id_organizers' => 'nullable|string',
        ]);

        $item = Event::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $data['poster'] = $fileName;
        }

        $item->update($data);

        return redirect()->route('event-page')->with('success', 'Event updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Event::findOrFail($id);
        $item->delete();

        return redirect()->route('event-page')->with('success', 'Event deleted successfully!');
    }
}
