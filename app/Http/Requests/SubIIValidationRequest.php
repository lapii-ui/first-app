<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubIIValidationRequest extends FormRequest
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
             'cat_id'                       => 'required',
             'sub_i_id'                     => 'required',
             'name'                         => 'required',
             'text_color'                   => 'required',
             'background_color'             => 'required'
         ];
     }
 
     public function messages()
     {
         return [
            'cat_id.required'               => 'Category required!',
            'sub_i_id.required'             => 'Sub Category required!',
            'name.required'                 => 'Sub Category II name required!',
            'text_color.required'           => 'Text color required!',
            'background_color.required'     => 'Background color required!'
         ];
     }
}
