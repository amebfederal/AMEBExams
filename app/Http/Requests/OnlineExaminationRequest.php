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
            'subject_code' => 'required|unique:online_examinations|max:100',
            'description' => 'max:125',
            'expiry_months' => 'required',
            'renewable_fee' => 'required_if:renewable_fee_type,custom',
            'sub_category_id' => 'required',
            'grade_id' => 'required',
            'exam_duration' => 'required',
            'certificate_types' => 'required',
            'states' => 'required',
            'default_price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'rising_software_key' => 'required|unique:online_examinations|max:255',
        ];

        if($this->method() != 'PATCH'){
            $rules['image'] = 'required';
        }else{
            $id = $this->segment(3);
            $rules['subject_code'] = 'required|unique:online_examinations,id,'.$id.'|max:100';
            $rules['rising_software_key'] = 'required|unique:online_examinations,id,'.$id.'|max:255';
        }

        return $rules;
    }

    public function messages(){
        return [
            'sub_category_id.required' => 'The category field is required',
            'grade_id.required' => 'The grade field is required'
        ];
    }
}
