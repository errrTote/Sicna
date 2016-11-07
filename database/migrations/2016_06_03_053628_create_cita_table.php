<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('hora');
            $table->boolean('confirmada');
            $table->enum('servicio', ['Pre-Natal', 'Post-Natal'])->default('Pre-Natal');
            $table->integer('codigoPaciente')->unsigned();
            $table->foreign('codigoPaciente')->references('id')->on('pacientes');
            
            $table->integer('codigoEmpleado')->unsigned();
            $table->foreign('codigoEmpleado')->references('id')->on('empleados');


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
        Schema::drop('citas');
    }
}
