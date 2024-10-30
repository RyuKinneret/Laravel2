<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAutoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'marca' => 'required',
            'modelo' => 'required',
            'tipo' => 'required',
            'color' => 'required',
            'anio_fabricacion' => 'required|integer',
            'precio' => 'required|numeric',
            'estado' => 'required',
            'stock' => 'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'tipo' => 'Tipo',
            'color' => 'Color',
            'anio_fabricacion' => 'Año de Fabricación',
            'precio' => 'Precio',
            'estado' => 'Estado',
            'stock' => 'Stock'
        ];
    }

    public function messages()
    {
        return [
            'marca.required' => 'Error, ingrese la marca del auto.',
            'modelo.required' => 'Error, ingrese el modelo del auto.',
            'tipo.required' => 'Error, ingrese el tipo de auto.',
            'color.required' => 'Error, ingrese el color del auto.',
            'anio_fabricacion.required' => 'Error, ingrese el año de fabricación.',
            'precio.required' => 'Error, ingrese el precio del auto.',
            'estado.required' => 'Error, ingrese el estado del auto.',
            'stock.required' => 'Error, ingrese el stock del auto.'
        ];
    }
}
