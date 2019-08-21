<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductoRequest extends FormRequest
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
            'precio' => 'required',
            'iva' => 'required',
            'cantidad_disponible' => 'required',
            'cantidad_minima' => 'required',
            'cantidad_maxima' => 'required'
        ];
    }
    public function messages() {
        return [
            'nombre.required' => 'El producto requiere un nombre',
            'precio.required' => 'No ha ingresado el precio',
            'iva.required' => 'No ha ingresado el iva',
            'cantidad_disponible.required' => 'No ha ingresado la cantidad disponible',
            'cantidad_minima.required' => 'No ha ingresado la cantidad minima',
            'cantidad_maxima.required' => 'No ha ingresado la cantidad maxima'
        ];
    }

}
