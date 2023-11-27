<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioValidar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'usuario' =>'required|min:3|max:10|regex:/^[\pL\d\-]+(?!\s)$/u|' . Rule::unique('usuario', 'usuario')->ignore($this->id_usuario, 'id_usuario'),
            'clave' =>'required|min:3|max:10|',
        ];
    }
    public function messages(){
        return [
            'usuario.required' => 'Debe llenar el campo',
            'usuario.min' => 'La cantidad minima de caracteres es 3',
            'usuario.max' => 'La cantidad maxima de caracteres es 10',
            'usuario.unique' => 'El usuario ya se encuentra registrada',
            'usuario.regex' => 'Solo se aceptan letras y espacios, no numeros',
            'clave.required' => 'Debe llenar el campo',
            'clave.min' => 'La cantidad minima de caracteres es 3',
            'clave.max' => 'La cantidad maxima de caracteres es 10',
        ];
    }
}
