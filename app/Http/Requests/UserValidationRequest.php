<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidationRequest extends FormRequest
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
             'name'                         => 'required',
             'email'                        => 'required',
             'password'                     => 'required',
             'password_confirmation'        => 'required',
             'role'                         => 'required'
         ];
     }
 
     public function messages()
     {
         return [
            'name.required'                => 'Username required!',
            'email.required'               => 'Email required!',
            'password.required'            => 'Password required!',
            'password_confirmation.required' => 'Confirm password required!',
            'role.required'                => 'Role user required!'
         ];
     }
}
