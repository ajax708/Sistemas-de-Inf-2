<?php

use Faker\Generator as Faker;

$factory->define(App\Seguro::class, function (Faker $faker) {
    $pacientes = App\Paciente::all()->random();
    $aseguradora = App\Aseguradora::all()->random();
    return [
    	'paciente_id' => $pacientes->id,
    	'aseguradora_id' => $aseguradora->id,
       'cod_seguro' => $faker->isbn10,
       'tipo' => $faker->randomElement(['01','02','03']),
       'max_cobertura' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
       'porcentaje_cobertura' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
       'vencimiento' => $faker->datetime,
       'estado' => $faker->randomElement(['01','02']),
    ];
});
