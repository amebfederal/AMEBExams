<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressVerificationRequest extends FormRequest
{
    /* Determine if the user is authorized to make this request.
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
            'preference' => 'required',
            'state' => 'required',
            'country' => 'required_if:state,others'
        ];
        return $rules;
    }
}