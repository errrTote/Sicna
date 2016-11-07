<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplementarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complementarios', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaExamen');
            $table->double('hb');
            $table->double('hto');
            $table->integer('leucocitos');
            $table->integer('glicemia');
            $table->integer('urea');
            $table->double('creatinina');
            $table->boolean('vdrl');
            $table->string('orina');
            $table->boolean('hiv');
            $table->integer('toxoTest');
            $table->string('hepatitis');

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
        Schema::drop('complementarios');
    }
}
