<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required|min:6',
            'clave' => 'required|min:6',
            'activo' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio',
            'apellidos.required' => ['El campo apellidos es obligatorio'],
            'email.required' => 'El campo email es obligatorio',
            'email.min' => 'El  campo email no puede ser menor a 6 dígitos',
            'clave.required' => 'El clave es obligatorio',
            'clave.min' => 'El campo clave no puede ser menor a 6 dígitos',
            'activo.required' => 'El campo activo es obligatorio'
        ];
    }
}
