<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VenueRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'location' => 'required',
            'seats' => 'required|integer',
            'venue' => 'required',
            'from' => 'required',
            'till' => 'required',
            'status' => 'required'
        ];
        return $rules;
    }
}
