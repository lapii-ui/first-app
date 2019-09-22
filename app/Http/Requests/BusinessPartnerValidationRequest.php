<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessPartnerValidationRequest extends FormRequest
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
            'name'         =>  'required',
            'type'  =>  'required',
            'phone'  => 'required',
        ];
    }
    public function messages()
    {
        return [
           'name.required'              => 'Name required!',
           'type.required'              => 'Type required!',
           'phone.required'        => 'Phone required!',
        ];
    }
}
