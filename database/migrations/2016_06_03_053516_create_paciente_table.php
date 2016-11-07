<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ocupacion');
            $table->string('sangre');
            $table->integer('gestas');
            $table->integer('paras');
            $table->integer('abortos');
            $table->integer('curetajes');
            $table->integer('prematuros');
            $table->integer('ectopicos');
            $table->integer('molar');
            $table->integer('cesareas');
            $table->integer('menarquia');
            $table->integer('parejas');
            $table->string('antecedentesHereditarios');
            $table->integer('codigoPersona')->unsigned();
            $table->foreign('codigoPersona')->references('id')->on('personas');
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
        Schema::drop('pacientes');
    }
}
