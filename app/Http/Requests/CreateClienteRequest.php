<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
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
            'id_cliente' => 'required',
            'nombre' => 'required',
            'telefonos' => 'required',
            'direccion' => 'required',
            'con_credito' => 'required'
        ];
    }
    public function messages() {
        return [
            'id_cliente.required' => 'No ha ingresado la identificación del cliente',
            'nombre.required' => 'El cliente requiere un nombre',
            'telefonos.required' => 'No ha ingresado el telefono',
            'direccion.required' => 'No ha ingresado la direccion',
            'con_credito.required' => 'No ha ingresado si tiene credito'
        ];
    }
}
