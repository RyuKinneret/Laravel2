<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
            'direccion' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'email' => 'Email',
            'telefono' => 'Teléfono',
            'direccion' => 'Dirección'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Error, ingrese el nombre del cliente.',
            'apellido.required' => 'Error, ingrese el apellido del cliente.',
            'email.required' => 'Error, ingrese el email del cliente.',
            'telefono.required' => 'Error, ingrese el teléfono del cliente.',
            'direccion.required' => 'Error, ingrese la dirección del cliente.'
        ];
    }
}
