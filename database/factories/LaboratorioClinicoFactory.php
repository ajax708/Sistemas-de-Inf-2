<?php

use Faker\Generator as Faker;

$factory->define(App\LaboratorioClinico::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber
    ];
});
