<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosteosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posteos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo','50');
            $table->string('descripcion','2000');
            $table->string('imagen','45');
            $table->integer('id_cliente')->unsigned();;
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');;
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
        Schema::dropIfExists('posteos');
    }
}
