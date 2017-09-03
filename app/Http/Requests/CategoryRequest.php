<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'status' => 'required',
            'description' => 'required',
            'visibility' => 'required',
            'availability' => 'required'
        ];

        if($this->method() != 'PATCH'){
            $rules['file'] = 'required';
        }

        return $rules;
    }
}
