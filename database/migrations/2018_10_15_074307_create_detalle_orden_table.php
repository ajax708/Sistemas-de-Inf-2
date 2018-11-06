<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_orden', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('orden_id')->unsigned()->nullable($value=false);
            $table->foreign('orden_id')->references('id')->on('ordenes')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('analisis_id')->unsigned()->nullable($value=false);
            $table->foreign('analisis_id')->references('id')->on('analisis')->onDelete('cascade')->onUpdate('cascade');

            $table->float('precio_venta',8,2)->nullable();
            $table->enum('estado',['01','02','03','04'])->default('01');
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
        Schema::dropIfExists('detalle_orden');
    }
}
