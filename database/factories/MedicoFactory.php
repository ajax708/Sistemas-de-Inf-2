<?php

use Faker\Generator as Faker;

$factory->define(App\Medico::class, function (Faker $faker) {
    $personas = App\Persona::pluck('id')->toArray();
    return [
        //
        'id' => $faker->unique()->randomElement($personas),
        'telefono_laboral' => $faker->phoneNumber,
        'antiguedad' => $faker->date,
        'estado'=> $faker->randomElement(['01','02']),
        'especialidad'=> $faker->randomElement(['01','02','03','04','05','06','07','08','09','10']),
        
    ];
});
