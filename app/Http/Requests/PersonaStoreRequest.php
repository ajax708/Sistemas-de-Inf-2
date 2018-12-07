<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonaStoreRequest extends FormRequest
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
            
            'nombre'    =>  'required',
            'apellido'  =>  'required',
            'tipo'      =>  'required',
            'email'     => ['required', 'email', Rule::unique('users')],
            'telefono'  =>  'required',
            'celular'   =>  'required',
        ];
    }
}
