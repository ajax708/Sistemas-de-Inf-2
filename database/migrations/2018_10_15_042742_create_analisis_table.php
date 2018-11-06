<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analisis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clave')->unique()->nullable($value=false);
            $table->string('nombre')->nullable($value=false);
            
             //clasificacion_id
            $table->integer('clasificacion_id')->unsigned()->nullable();
            $table->foreign('clasificacion_id')->references('id')->on('clasificaciones')->onDelete('set null')->onUpdate('cascade');
            //area_id
            $table->integer('area_id')->unsigned()->nullable();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('set null')->onUpdate('cascade');

            $table->enum('tipo',['01','02','03'])->default('01');
            $table->enum('estado',['01','02','03'])->default('01');

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
        Schema::dropIfExists('analisis');
    }
}
