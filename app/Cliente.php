<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['id_cliente', 'nombre', 'telefonos',
                          'direccion',          
                          'con_credito'
                         ];
}
