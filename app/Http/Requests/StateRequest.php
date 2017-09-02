<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StateRequest extends FormRequest
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
            'prefix' => 'required',
            'notification_email' => 'required',
            'contact_email' => 'required',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'address' => 'required',
            'contact_person' => 'required',
            'contact_person_phone' => 'required|regex:/(01)[0-9]{9}/',
            'contact_person_email' => 'required',
            'api' => 'required',
            'key' => 'required'
        ];
        return $rules;
    }
}
