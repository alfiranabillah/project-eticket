<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
            'barcode' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order_id' => 'nullable', 
            'id_event' => 'required', 
            
        ]);

        $data['id_ticket'] = 'TIX' . Str::upper(mt_rand(100000, 999999));

        // Handle file upload (poster)
        if ($request->hasFile('barcode')) {
            $file = $request->file('barcode');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $data['barcode'] = $fileName;
        }

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
        'barcode' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'order_id' => 'nullable', 
        'id_event' => 'required', 

    ]);

    $ticket = Ticket::findOrFail($id);
    $data = $request->all();

    if ($request->hasFile('barcode')) {
        $file = $request->file('barcode');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('images'), $fileName);
        $data['barcode'] = $fileName;
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
