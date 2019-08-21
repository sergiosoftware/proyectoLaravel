<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->bigInteger('id_presentacion_producto')->unsigned();
            $table->foreign('id_presentacion_producto')->references('id_presentacion_producto')->on('presentaciones_productos');
            $table->integer('id_categoria_producto')->unsigned();
            $table->foreign('id_categoria_producto')->references('id_categoria_producto')->on('categorias_productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            //
        });
    }
}
