<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname', 45);
            $table->string('documento',10);
            $table->string('email')->unique();
            $table->string('password');
            $table->date('fecha_nacimiento');
            $table->string('phone');
            $table->string('address');
            $table->string('grupo_sanguineo',3);
            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id_cargo')->on('cargos');
            $table->integer('perfil_id')->unsigned();
            $table->foreign('perfil_id')->references('id_perfil')->on('perfiles');
            $table->integer('oficina_id')->unsigned();
            $table->foreign('oficina_id')->references('id_oficina')->on('oficinas');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
