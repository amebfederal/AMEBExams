<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountHolderRequest extends FormRequest
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
            'fname' => 'required',
            'lname' => 'required',
            'role' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'confirm_email' => 'sometimes|same:email',
            'password' => 'required',
            'confirm_password' => 'sometimes|same:password',
            'address' => 'required',
            'suburb' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'age_verification' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
        return $rules;
    }

    public function messages(){

        return [
            'phone:required' => 'The preferred phone field is required'
        ];

    }
}
