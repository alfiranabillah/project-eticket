<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('pages.admin.tickets.index', compact('tickets'));
    }

    public function create()
    {
        $events = Event::all();
        return view('pages.admin.tickets.create', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_event' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'sale_start' => 'nullable|date',
            'sale_end' => 'nullable|date',
            'time' => 'nullable|date_format:H:i',
            'barcode' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        Ticket::create($request->all());

        return redirect()->route('ticket-page')->with('success', 'Ticket created successfully.');
    }

    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
        $events = Event::all();
        return view('pages.admin.tickets.edit', compact('ticket', 'events'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'sale_start' => 'nullable|date',
            'sale_end' => 'nullable|date',
            'time' => 'nullable|date_format:H:i',
        ]);

        $ticket = Ticket::findOrFail($id);
        $ticket->update($request->all());

        return redirect()->route('ticket-page')->with('success', 'Ticket updated successfully.');
    }

    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->route('ticket-page')->with('success', 'Ticket deleted successfully.');
    }
}

