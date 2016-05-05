<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FUNCIONARIOS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('funcionarios', function ($table) {
            $table->increments('id_funcionario',10);
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users');
            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id_cargo')->on('cargos');
            $table->integer('perfil_id')->unsigned();
            $table->foreign('perfil_id')->references('id_perfil')->on('perfiles');
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
        Schema::drop('funcionarios');
    }
}
