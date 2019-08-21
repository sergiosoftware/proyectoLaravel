<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyPagosProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pagos_proveedores', function (Blueprint $table) {
            $table->string('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pagos_proveedores', function (Blueprint $table) {
            //
        });
    }
}
