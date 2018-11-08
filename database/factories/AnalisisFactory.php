<?php

use Faker\Generator as Faker;

$factory->define(App\Analisis::class, function (Faker $faker) {
    return [
        'clave' => $faker->unique()->word,
        'nombre' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'clasificacion_id' => null,
        'area_id' => $faker->randomElement(App\Area::pluck('id')->toArray()),
        'tipo' => $faker->randomElement(['01','02','03']),
        'estado' => $faker->randomElement(['01','02','03']),
    ];
});
