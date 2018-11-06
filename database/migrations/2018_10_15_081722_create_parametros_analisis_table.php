
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros_analisis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable($value=false);
            $table->enum('tipo',['01','02','03'])->default('01');
            $table->integer('cant_resultados')->unsigned()->nullable();

            $table->integer('unidad_medida_id')->unsigned()->nullable();
            $table->foreign('unidad_medida_id')->references('id')->on('unidades_medida')->onDelete('set null')->onUpdate('cascade');

            $table->integer('analisis_id')->unsigned();
            $table->foreign('analisis_id')->references('id')->on('analisis')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('parametros_analisis');
    }
}
