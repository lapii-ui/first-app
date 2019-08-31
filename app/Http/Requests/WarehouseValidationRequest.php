<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WarehouseValidationRequest extends FormRequest
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
             'code'                         => 'required',
             'name'                         => 'required',
             'location'                     => 'required'
         ];
     }
 
     public function messages()
     {
         return [
            'code.required'                => 'Code Warehouse required!',
            'name.required'                => 'Warehouse Name required!',
            'location.required'            => 'Location required!'
         ];
     }
}
