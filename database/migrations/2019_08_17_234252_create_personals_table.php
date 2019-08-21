<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatepersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->string('id_persona')->primary();
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('perfil');
            $table->string('contrasena');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
