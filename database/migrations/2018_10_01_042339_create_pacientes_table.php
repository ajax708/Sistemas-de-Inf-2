<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');  
            $table->foreign('id')->references('id')->on('personas')->onDelete('cascade');       
            $table->string('cod_paciente')->unique();
            $table->date('fecha_nacimiento');
            $table->date('antiguedad');
            $table->datetime('ultima_solicitud');
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
        Schema::dropIfExists('pacientes');
    }
}
