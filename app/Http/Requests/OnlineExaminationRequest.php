<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnlineExaminationRequest extends FormRequest
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
            'expiry_months' => 'required',
            'renewable_fee' => 'required_if:renewable_fee_type,custom',
            'sub_category_id' => 'required',
            'grade_id' => 'required',
            'exam_duration' => 'required',
            'certificate_types' => 'required',
            'states' => 'required',
            'default_price' => 'required',
            'rising_software_key' => 'required',
        ];

        if($this->method() != 'PATCH'){
            $rules['image'] = 'required';
        }

        return $rules;
    }

    public function messages(){
        return [
            'sub_category_id.required' => 'Category field is required',
            'grade_id.required' => 'Grade field is required'
        ];
    }
}
