<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Inicio_Validar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
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
            'usuario' =>'required|min:3|max:10|regex:/^[\pL\d\-]+(?!\s)$/u|',
            'clave' =>'required|min:3|max:10|',
        ];
    }
    public function messages(){
        return [
            'usuario.required' => 'Debe llenar el campo',
            'usuario.min' => 'La cantidad minima de caracteres es 3',
            'usuario.max' => 'La cantidad maxima de caracteres es 10',
            'clave.required' => 'Debe llenar el campo',
            'clave.min' => 'La cantidad minima de caracteres es 3',
            'clave.max' => 'La cantidad maxima de caracteres es 10',
        ];
    }

}
