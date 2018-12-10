<?php

use Illuminate\Database\Seeder;

class AnalisisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Analisis::class,0)->create();
        App\UnidadMedida::create([
        	'nombre' => 'Litro',
        	'simbolo' => 'L',
        	'tipo' => '01'
        ]);
        App\UnidadMedida::create([
        	'nombre' => 'Kilo',
        	'simbolo' => 'kg',
        	'tipo' => '01'
        ]);
    }
}
