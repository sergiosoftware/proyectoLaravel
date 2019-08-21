<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago_Cliente extends Model
{
    //
    protected $table = 'pagos_clientes'; 
	protected $primaryKey = 'id_pago_cliente';
}
