<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchValidationRequest extends FormRequest
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
             'company_id'                   => 'required',
             'warehouse_id'                 => 'required',
             'location'                     => 'required'
         ];
     }
 
     public function messages()
     {
         return [
            'name.required'                 => 'Branch Name is required!',
            'company_id.required'           => 'Company Provider is required!',
            'warehouse_id.required'         => 'Warehouse is required!',
            'location.required'             => 'Location is required!'
         ];
     }
}
