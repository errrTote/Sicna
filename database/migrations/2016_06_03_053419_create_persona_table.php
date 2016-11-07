<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('personas', function (Blueprint $table) {
           $table->increments('id');
            $table->string('cedula');
            $table->string('primerNombre');
            $table->string('segundoNombre');
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->date('fechaNacimiento');
            $table->string('telefonoMovil');
            $table->string('telefonoFijo');
            $table->string('direccion');
            $table->integer('codigoParroquia')->unsigned();
            $table->foreign('codigoParroquia')->references('id')->on('parroquias');
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
        Schema::drop('personas');
    }
}
