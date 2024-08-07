<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'nullable|max:225',
            'description'=>'nullable|string|max:500',
            'price'=>'nullable|integer',
            'location'=>'required|string',
            'start_date'=>'required|date',
            'poster'=>'required|max:2048',
            'status'=>'required|max:225',
            'id_organizers' => 'required|string',
            'category' => 'nullable|string',
        ];
    }
}
