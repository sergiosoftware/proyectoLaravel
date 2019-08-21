<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyPagosClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pagos_clientes', function (Blueprint $table) {
            $table->string('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pagos_clientes', function (Blueprint $table) {
            //
        });
    }
}
