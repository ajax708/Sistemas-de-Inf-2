<?php

use Illuminate\Database\Seeder;

class EstablecimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Establecimiento::class,0)->create();
  			
   			App\Establecimiento::all()->each(function ($establecimiento){
   				$medicos = App\Medico::all()->random(rand(1, 3));
     			$establecimiento->medicos()->saveMany($medicos);
   		});
    }
}
