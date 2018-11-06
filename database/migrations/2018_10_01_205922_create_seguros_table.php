<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSegurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned()->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('aseguradora_id')->unsigned()->nullable($value=false);
            $table->foreign('aseguradora_id')->references('id')->on('aseguradoras')->onDelete('cascade')->onUpdate('cascade');
            $table->string('cod_seguro');
            $table->enum('tipo',['01','02','03'])->default('01');
            $table->float('max_cobertura',8,2);
            $table->float('porcentaje_cobertura',8,2);
            $table->datetime('vencimiento');
            $table->enum('estado',['01','02']);
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
        Schema::dropIfExists('seguros');
    }
}
