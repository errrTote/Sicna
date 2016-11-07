<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFisicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mamas');
            $table->string('cardiovascular');
            $table->string('varices');
            $table->string('ginecologico');

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
        Schema::drop('fisicos');
    }
}
