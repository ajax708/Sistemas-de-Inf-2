<?php

use Faker\Generator as Faker;

$factory->define(App\EstablecimientoMedico::class, function (Faker $faker) {
    return [
        'fecha_inicio' => $faker->datetime
    ];
});