<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ventas', function (Blueprint $table) {
            $table->string('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->string('id_vendedor')->unsigned();
            $table->foreign('id_vendedor')->references('id_persona')->on('personal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ventas', function (Blueprint $table) {
            //
        });
    }
}
