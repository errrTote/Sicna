<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('ultimoPeriodo');
            $table->date('fechaProbable');
            $table->string('reglas');
            $table->string('antecedentes');
            $table->boolean('ptialismo');
            $table->boolean('pirosis');
            $table->boolean('nauseas');
            $table->boolean('vomitos');
            $table->boolean('cefalea');
            $table->boolean('mareos');
            $table->boolean('insomnios');
            $table->boolean('estrenimiento');
            $table->string('otros');
            $table->boolean('prueba');
            $table->date('fechaPrueba');
            $table->enum('resultadoPrueba', ['positivo', 'negativo'])->default('positivo');
            $table->boolean('citologia');
            $table->string('tratamiento');
                   
            $table->integer('codigoPaciente')->unsigned();
            $table->foreign('codigoPaciente')->references('id')->on('pacientes');
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
        Schema::drop('casos');
    }
}
