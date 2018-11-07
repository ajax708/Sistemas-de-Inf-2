<?php

use Faker\Generator as Faker;

$factory->define(App\Area::class, function (Faker $faker) {
	$labs = App\LaboratorioClinico::pluck('id')->toArray();
    return [
        'nombre' => $faker->jobTitle,
        'empleado_id' => $faker->randomDigit,
        'laboratorio_clinico_id' => $faker->randomElement($labs)
    ];
});
