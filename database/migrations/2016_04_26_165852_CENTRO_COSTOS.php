<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CENTROCOSTOS extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('centro_costos', function ($table) {
$table->increments('id_centro_costo',10);
$table->string('nombre_centro_costo', 45);

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


Schema::drop('centro_costos');
}
}
