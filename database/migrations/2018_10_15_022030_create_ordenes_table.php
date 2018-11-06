<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nro_orden')->unsigned()->unique();
            $table->datetime('fecha_ingreso')->nullable();
            $table->datetime('fecha_egreso')->nullable();
            $table->string('tipo_ingreso')->nullable();
            $table->float('total',8,2)->nullable();
            //paciente_id
            $table->integer('paciente_id')->unsigned()->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('set null')->onUpdate('cascade');
            //medico_id
            $table->integer('medico_id')->unsigned()->nullable();
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('set null')->onUpdate('cascade');
            //establecimiento_id
            $table->integer('establecimiento_id')->unsigned()->nullable();
            $table->foreign('establecimiento_id')->references('id')->on('establecimientos')->onDelete('set null')->onUpdate('cascade');
            //empleado_id
            $table->integer('empleado_id')->unsigned()->nullable();
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('set null')->onUpdate('cascade');
            //seguro_id
            $table->integer('seguro_id')->unsigned()->nullable();
            $table->foreign('seguro_id')->references('id')->on('seguros')->onDelete('set null')->onUpdate('cascade');


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
        Schema::dropIfExists('ordenes');
    }
}
