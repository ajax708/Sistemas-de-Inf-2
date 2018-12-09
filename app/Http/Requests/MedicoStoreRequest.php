<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MedicoStoreRequest extends FormRequest
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
            'password'=>'required',
            'email'     => ['required', 'email', Rule::unique('users')],

            'nombre'    =>  'required',
            'apellido'  =>  'required',
            'password'  =>  'required|min:6',
            'ci'    => 'required',
            'genero'  =>  'required',
            'telefono'=>  'required',
            'celular'=>  'required',

            'telefono_laboral'  =>  'required',
            'antiguedad'=>'required',
            'estado'=>'required',
        ];
    }
}
