<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVentaRequest extends FormRequest
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
            'fecha_venta' => 'required',
            'total_credito' => 'required',
            'total_contado' => 'required',
            'id_cliente' => 'required',
            'id_vendedor' => 'required',
        ];
    }
    public function messages() {
        return [
            'fecha_venta.required'=> 'La venta requiere una fecha',
            'total_credito.required' => 'La venta requiere un creditoe',
            'total_contado.required' => 'La venta requiere contado',
            'id_cliente.required' => 'La venta requiere un cliente',
            'id_vendedor.required' => 'La venta requiere un vendedor',
        ];
    }
}
