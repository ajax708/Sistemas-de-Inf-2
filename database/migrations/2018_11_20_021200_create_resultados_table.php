<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('analisis_id')->unsigned();
            $table->foreign('analisis_id')->references('id')->on('analisis')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('orden_id')->unsigned();
            $table->foreign('orden_id')->references('id')->on('ordenes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('parametros_analisis_id')->unsigned();
            $table->foreign('parametros_analisis_id')->references('id')->on('parametros_analisis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('valor')->nullable($value=false);
            $table->string('observaciones')->nullable();

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
        Schema::dropIfExists('resultados');
    }
}
