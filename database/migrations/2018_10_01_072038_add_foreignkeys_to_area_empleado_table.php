<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeysToAreaEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('area_empleado', function (Blueprint $table) {
            //
             $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('area_empleado', function (Blueprint $table) {
            //

            $table->dropForeign(['empleado_id']);
            $table->dropForeign(['area_id']);
        });
    }
}
