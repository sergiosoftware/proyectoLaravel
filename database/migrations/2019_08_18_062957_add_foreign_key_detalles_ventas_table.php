<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyDetallesVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalles_ventas', function (Blueprint $table) {
            $table->bigInteger('id_venta')->unsigned();
            $table->foreign('id_venta')->references('id_venta')->on('ventas');
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalles_ventas', function (Blueprint $table) {
            //
        });
    }
}
