<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productlistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'productname' => 'required|bail', //uniqe---name is already taken,,bail-->only one error show

            'catagory' => 'required',
            'details' => 'required',
            'status' => 'required'

        ];
    }
    public function messages(){
        return [

            'productname.required' => "productname can't left empty...",

            'catagory.required' => "catagory can't left empty...",
            'details.required' => "details can't left empty...",
            'status.required' => "status can't left empty..."

        ];
    }
}
