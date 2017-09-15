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
            'email' => 'required|unique:',
            'confirm_email' => 'sometimes|same:email',
            // 'password' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/',
            'password' => 'required',
            'confirm_password' => 'sometimes|same:password',
            'address' => 'required',
            'suburb' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'age_verification' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ];

        if($this->method() != 'PATCH'){
            $rules['email'] = 'required|unique:account_holders|max:100';
        }else{
            $id = $this->segment(3);
            $rules['email'] = 'required|unique:account_holders,id,'.$id.'|max:100';
        }

        return $rules;
    }

    public function messages(){

        return [
            'phone:required' => 'The preferred phone field is required',
            'password:regex' => 'The password field does not meet the requirement mentioned'
        ];

    }
}
