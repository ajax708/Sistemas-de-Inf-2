<?php

use Faker\Generator as Faker;

$factory->define(App\Establecimiento::class, function (Faker $faker) {
    return [
        'nombre' => 'Hospital '.$faker->company,
        'clasificacion' => $faker->randomElement(['01','02','03']),
        'tipo' => $faker->randomElement(['01','02']),
        'direccion' => $faker->address,
        'municipio' => $faker->streetName,
        'telefono' => $faker->phoneNumber
    ];
});
