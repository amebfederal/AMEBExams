<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title' => 'required',
            'subject_code' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'grade_id' => 'required',
            'default_price' => 'required',
            'state_price' => 'required',
            'availiability_state' => 'required',
            'visibility' => 'required',
            'status' => 'required',

        ];

        if($this->method() != 'PATCH'){
            $rules['file'] = 'required';
        }

        return $rules;
    }
}
