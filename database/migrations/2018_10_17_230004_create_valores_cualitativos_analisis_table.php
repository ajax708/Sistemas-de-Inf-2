<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoresCualitativosAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valores_cualitativos_analisis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('valor')->nullable($value=false);

            $table->integer('parametros_analisis_id')->unsigned()->nullable();
            $table->foreign('parametros_analisis_id')->references('id')->on('parametros_analisis')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('valores_cualitativos_analisis');
    }
}
