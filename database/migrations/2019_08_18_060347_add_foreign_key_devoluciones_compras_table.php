<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyDevolucionesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('devoluciones_compras', function (Blueprint $table) {
            $table->bigInteger('id_compra')->unsigned();
            $table->foreign('id_compra')->references('id_compra')->on('compras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('devoluciones_compras', function (Blueprint $table) {
            //
        });
    }
}
