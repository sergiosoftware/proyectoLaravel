<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyDetallesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalles_compras', function (Blueprint $table) {
            $table->bigInteger('id_compra')->unsigned();
            $table->foreign('id_compra')->references('id_compra')->on('compras');
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
        Schema::table('detalles_compras', function (Blueprint $table) {
            //
        });
    }
}
