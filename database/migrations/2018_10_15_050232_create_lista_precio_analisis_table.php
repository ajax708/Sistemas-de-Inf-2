<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaPrecioAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_precio_analisis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('listaprecio_id')->unsigned();
              $table->foreign('listaprecio_id')->references('id')->on('lista_precios')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('analisis_id')->unsigned();
              $table->foreign('analisis_id')->references('id')->on('analisis')->onDelete('cascade')->onUpdate('cascade');
            $table->float('valor',8,2)->nullable();
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
        Schema::dropIfExists('lista_precio_analisis');
    }
}
