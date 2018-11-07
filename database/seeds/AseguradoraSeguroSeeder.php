<?php

use Illuminate\Database\Seeder;

class AseguradoraSeguroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Aseguradora::class,4)->create();
        factory(App\Seguro::class,6)->create();
    }
}
