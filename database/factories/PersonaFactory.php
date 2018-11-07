<?php

use Faker\Generator as Faker;

$factory->define(App\Persona::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'ci' => $faker->creditCardNumber,
        'genero' => $faker->randomElement(['01','02']),
        'email' => $faker->safeEmail,
        'telefono' => $faker->phoneNumber,
        'celular' => $faker->phoneNumber
    ];
});
