<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class movieRequest extends FormRequest
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
            'moviename' => 'required|bail', //uniqe---name is already taken,,bail-->only one error show

            'details' => 'required'


        ];
    }
    public function messages(){
        return [

            'moviename.required' => "moviename can't left empty...",


            'details.required' => "details can't left empty..."


        ];
    }
}
