<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTorneosEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneosEquipos', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_inscripcion');
            $table->integer('id_equipo')->unsigned();;
            $table->foreign('id_equipo')->references('id')->on('equipos')->onDelete('cascade');
            $table->integer('id_torneo')->unsigned();;
            $table->foreign('id_torneo')->references('id')->on('torneos')->onDelete('cascade');
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
        Schema::dropIfExists('torneos_equipos');
    }
}
