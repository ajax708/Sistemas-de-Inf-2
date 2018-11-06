<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');  
            $table->foreign('id')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('telefono_laboral');
            $table->date('antiguedad');
            $table->enum('estado',['01','02']);
            $table->enum('especialidad',['01','02','03','04','05','06','07','08','09','10']);
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
        Schema::dropIfExists('medicos');
    }
}
