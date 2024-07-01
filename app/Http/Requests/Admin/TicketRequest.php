<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name_event' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'sale_start' => 'nullable|date',
            'sale_end' => 'nullable|date',
            'location' => 'required',
            'time' => 'nullable|date_format:H:i', 
        ];
    }
}
