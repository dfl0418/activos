<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ACTIVOS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function ($table) {
            $table->increments('id_activo',10);
            $table->string('nombre_activo', 45);
            $table->string('descripcion',45);
            $table->integer('numero_inventario');
            $table->date('fecha_compra');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id_categoria')->on('categorias');
            $table->timestamps();

    });}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        
     
        Schema::drop('activos');
    }
}
