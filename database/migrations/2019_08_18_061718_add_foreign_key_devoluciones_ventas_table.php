<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyDevolucionesVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('devoluciones_ventas', function (Blueprint $table) {
            $table->bigInteger('id_venta')->unsigned();
            $table->foreign('id_venta')->references('id_venta')->on('ventas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('devoluciones_ventas', function (Blueprint $table) {
            //
        });
    }
}
