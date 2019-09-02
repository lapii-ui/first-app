<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyValidationRequest extends FormRequest
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
             'name'                          => 'required',
             'phone1'                        => 'required',
             'phone2'                        => 'required',
             'email'                         => 'required',
             'currency_id'                   => 'required',
             'address'                       => 'required',
         ];
     }
 
     public function messages()
     {
         return [
            'name.required'                 => 'Username required!',
            'phone1.required'               => 'Phone required!',
            'phone2.required'               => 'Mobile required!',
            'email.required'                => 'Email required!',
            'currency_id.required'          => 'Currency default required!',
            'address.required'              => 'Address required!'
         ];
     }
}
