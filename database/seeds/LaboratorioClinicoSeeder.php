<?php

use Illuminate\Database\Seeder;

class LaboratorioClinicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\LaboratorioClinico::class, 0)->create()
        ->each(function($u) {
        	for ($i=0; $i < 3; $i++) {         		
   				$u->areas()->save(factory(App\Area::class)->make());
        	}
   		});
    }
}
