<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alias','20');
            $table->string('posicion','20');
            $table->string('numero','2');
            $table->string('avatar','25');
            $table->tinyInteger('goles');
            $table->tinyInteger('asistencias');
            $table->integer('id_equipo')->unsigned();
            $table->foreign('id_equipo')->references('id')->on('equipos')->onDelete('cascade');
            $table->integer('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
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
        Schema::dropIfExists('jugadores');
    }
}
