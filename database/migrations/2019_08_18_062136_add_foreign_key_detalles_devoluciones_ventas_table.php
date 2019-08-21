<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyDetallesDevolucionesVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalles_devoluciones_ventas', function (Blueprint $table) {
            $table->bigInteger('id_devolucion_venta')->unsigned();
            $table->foreign('id_devolucion_venta')->references('id_devolucion_venta')->on('devoluciones_ventas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalles_devoluciones_ventas', function (Blueprint $table) {
            //
        });
    }
}
