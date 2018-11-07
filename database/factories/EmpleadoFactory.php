<?php

use Faker\Generator as Faker;

$factory->define(App\Empleado::class, function (Faker $faker) {
    $personas = App\Persona::pluck('id')->toArray();
    return [
        //
        'id' => $faker->unique()->randomElement($personas),
        'cod_empleado' => $faker->unique()->isbn10,
        'telefono_laboral' => $faker->phoneNumber,
        'antiguedad' => $faker->date,
        'estado' => $faker->randomElement(['01','02'])
    ];
});
