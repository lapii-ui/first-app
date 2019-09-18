<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DefineUOMValidationRequest extends FormRequest
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
             'alt_qty'                       => 'required',
             'uom_id'                        => 'required',
             'base_qty'                      => 'required',
             'group_uom_id'                  => 'required',
         ];
     }
 
     public function messages()
     {
         return [
            'alt_qty.required'               => 'Alternative QTY is required!',
            'uom_id.required'                => 'UOM is required!',
            'base_qty.required'              => 'Base QTY is required!',
            'group_uom_id.required'          => 'Group UOM is required!'
         ];
     }
}
