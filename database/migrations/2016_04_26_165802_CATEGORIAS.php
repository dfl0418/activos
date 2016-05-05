<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CATEGORIAS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categorias', function ($table) {
            $table->create();
            $table->increments('id_categoria');
            $table->string('nombre_categoria', 45);
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
        //

        Schema::drop('categorias');

    }

}
