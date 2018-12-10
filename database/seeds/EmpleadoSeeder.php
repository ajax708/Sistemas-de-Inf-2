<?php

use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			factory(App\Empleado::class,0)->create();
  			
   			App\Empleado::all()->each(function ($empleado){
   				$areas = App\Area::all()->random(rand(1, 5));
     			$empleado->areas()->saveMany($areas);
   		});
	}
}
