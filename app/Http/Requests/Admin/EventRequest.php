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
            'title' =>'required|max:225',
            'desc'=>'required',
            'location'=>'required',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'poster'=>'required|max:225',
            'status'=>'required|max:225',

        ];
    }
}
