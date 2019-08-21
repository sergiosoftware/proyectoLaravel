<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //
	protected $table = 'personal';
	protected $primaryKey = 'id_persona';
	protected $fillable = ['id_persona','nombre', 'telefono',
                          'direccion', 'perfil', 'contraseña'
                         ];
}
