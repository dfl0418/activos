<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OFICINAS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('oficinas', function ($table) {
            $table->increments('id_oficina',10);
            $table->string('nombre_oficina', 45);         
            $table->float('latitud');
            $table->float('longitud');
            $table->integer('sede_id')->unsigned();
            $table->foreign('sede_id')->references('id_sede')->on('sedes');
            $table->integer('centro_costo_id')->unsigned();
            $table->foreign('centro_costo_id')->references('id_centro_costo')->on('centro_costos');
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
        
        Schema::drop('oficinas');
    }
}
