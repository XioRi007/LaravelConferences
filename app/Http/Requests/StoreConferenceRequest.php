<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConferenceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:conferences|max:255|min:2',
            'date' => 'required|date_format:Y-m-d',
            'time' => 'required|date_format:H:i',
            'country' => 'required|string',
            'longtitude' => 'required|numeric',
            'latitude' => 'required|numeric',
        ];
    }
}
