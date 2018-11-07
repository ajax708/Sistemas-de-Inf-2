<?php

use Faker\Generator as Faker;

$factory->define(App\AreaEmpleado::class, function (Faker $faker) {
    return [
        'fecha_inicio' => $faker->datetime,
      	'fecha_fin' => $faker->datetime,
    ];
});
