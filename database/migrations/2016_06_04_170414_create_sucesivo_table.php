<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucesivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucesivos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaExamen');
            $table->double('peso');
            $table->string('arterial');
            $table->double('pesoFetal');
            $table->string('ucc');
            $table->enum('presentacion', ['cefálica' , 'podálica'])->default('cefálica');
            $table->string('fcf');
            $table->double('alturaUterina');
            $table->integer('semanaEmbarazo');

            $table->integer('codigoCaso')->unsigned();
            $table->foreign('codigoCaso')->references('id')->on('casos');


            
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
        Schema::drop('sucesivos');
    }
}
