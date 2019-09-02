<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryValidRequest extends FormRequest
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
             'text_color'                   => 'required',
             'background_color'             => 'required'
         ];
     }
 
     public function messages()
     {
         return [
            'name.required'                 => 'Category name required!',
            'text_color.required'           => 'Text color required!',
            'background_color.required'     => 'Background color required!'
         ];
     }
}
