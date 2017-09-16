<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PracticeExaminationRequest extends FormRequest
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
            'exam_id' => 'required|unique:practice_examinations|max:100',
            'description' => 'max:125',
            'expiry_months' => 'required',
            'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'allowed_number' => 'required'
        ];

        if($this->method() != 'PATCH'){
            $rules['image'] = 'required';
        }else{
            $id = $this->segment(3);
            $rules['exam_id'] = 'required|unique:practice_examinations,id,'.$id.'|max:100';
        }

        return $rules;
    }

    public function messages(){
        return [];
    }
}
