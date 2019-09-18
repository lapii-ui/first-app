<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptInfoValidationRequest extends FormRequest
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
        return [
            'title'         =>  'required',
            'branch_name'   =>  'required',
            'address'       =>  'required',
            'tel1'          =>  'required',
            'tel2'          =>  'required',
            'note_kh'       =>  'required',
        ];
    }
    public function messages()
    {
        return [
           'title.required'              => 'Title required!',
           'branch_name.required'        => 'Branch name required!',
           'address.required'            => 'Address required!',
           'tel1.required'               => 'Tel 1 required!',
           'tel2.required'               => 'Tel 2 required!',
           'note_kh.required'            => 'Remark (KH) required!',
        ];
    }
}
