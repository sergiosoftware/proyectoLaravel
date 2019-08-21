<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyDetallesDevolucionesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalles_devoluciones_compras', function (Blueprint $table) {
            $table->bigInteger('id_devolucion_compra')->unsigned();
            $table->foreign('id_devolucion_compra')->references('id_devolucion_compra')->on('devoluciones_compras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalles_devoluciones_compras', function (Blueprint $table) {
            //
        });
    }
}
