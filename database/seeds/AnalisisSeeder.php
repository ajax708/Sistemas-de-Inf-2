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
        factory(App\Analisis::class,10)->create();
    }
}
