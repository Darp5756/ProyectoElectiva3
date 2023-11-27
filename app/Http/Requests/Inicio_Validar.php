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
            'correo' =>'required|min:10|max:80|email|',
            'clave' =>'required|min:3|max:10|',
        ];
    }
    public function messages(){
        return [
            'correo.required' => 'Debes llenar el campo',
            'correo.min' => 'La cantidad minima de caracteres es 10',
            'correo.max' => 'La cantidad maxima de caracteres es 80',
            'correo.email' => 'El formato de su correo electronico es invalido',
            'clave.required' => 'Debe llenar el campo',
            'clave.min' => 'La cantidad minima de caracteres es 3',
            'clave.max' => 'La cantidad maxima de caracteres es 10',
        ];
    }

}
