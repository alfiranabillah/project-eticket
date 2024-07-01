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
        $tickets = Ticket::all();
        return view('pages.admin.tickets.create', compact('tickets'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_event' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'sale_start' => 'nullable|date',
            'sale_end' => 'nullable|date',
            'location' => 'required|string',
            'time' => 'nullable|date_format:H:i', 
            'barcode' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            
        ]);

        Ticket::create($data);
        return redirect()->route('ticket-page')->with('success', 'Ticket created successfully!');
    }

    public function edit(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('pages.admin.tickets.edit', [
            'ticket' => $ticket
        ]);
    }


    public function update(Request $request, string $id)
{
    $request->validate([
        'name_event' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'sale_start' => 'nullable|date',
        'sale_end' => 'nullable|date',
        'location' => 'required|string',
        'time' => 'nullable|date_format:H:i',
        'barcode' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    $ticket = Ticket::findOrFail($id);
    $data = $request->all();

    if ($request->hasFile('barcode')) {
        $imageName = time() . '.' . $request->barcode->extension();
        $request->barcode->move(public_path('images'), $imageName);
        $data['barcode'] = $imageName;
    }

    $ticket->update($data);

    return redirect()->route('ticket-page')->with('success', 'Ticket updated successfully!');
}

    
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
        return redirect()->route('ticket-page')->with('success', 'Ticket deleted successfully!');
    }
}
