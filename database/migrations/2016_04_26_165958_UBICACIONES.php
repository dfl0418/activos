<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UBICACIONES extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('ubicaciones', function ($table) {
            $table->increments('id_ubicacion',10);
            $table->date('fecha_ingreso');
            $table->date('fecha_salida');
            $table->integer('activo_id')->unsigned();
            $table->foreign('activo_id')->references('id_activo')->on('activos');
            $table->integer('oficina_id')->unsigned();
            $table->foreign('oficina_id')->references('id_oficina')->on('oficinas');
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
        Schema::drop('ubicaciones');
    }
}
