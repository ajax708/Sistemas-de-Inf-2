<?php

use Faker\Generator as Faker;

$factory->define(App\Aseguradora::class, function (Faker $faker) {
    return [
       'nombre' => $faker->company.' Seguros',
       'rubro'	=> $faker->text,
       'tipo' => $faker->randomElement(['01','02','03']),
       'direccion' => $faker->address,
       'telefono' => $faker->phoneNumber
   ];
});
