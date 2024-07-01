<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventRequest;
use App\Models\Event;
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

        Event::create($data);

        return redirect()->route('event-page')->with('success', 'Event created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Tampilkan detail event jika diperlukan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Event::findOrFail($id);
        return view('pages.admin.event-package.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'nullable|string',
        ]);

        $item = Event::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('poster')) {
            $imageName = time().'.'.$request->poster->extension();
            $request->poster->move(public_path('images'), $imageName);
            $data['poster'] = $imageName;
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
