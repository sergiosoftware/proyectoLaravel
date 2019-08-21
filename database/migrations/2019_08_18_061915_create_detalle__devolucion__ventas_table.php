<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDevolucionVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_devoluciones_ventas', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_devolucion_venta');
            $table->integer('id_producto');
            $table->integer('cantidad_producto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_devoluciones_ventas');
    }
}
