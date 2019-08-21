<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable = ['nombre', 'precio', 'iva',
                          'cantidad_disponible',          
                          'cantidad_minima', 'cantidad_maxima', 'id_presentacion_producto',
                          'id_categoria_producto'
                         ];

    public function getRouteKeyName() {
       return 'nombre';
    }
}
