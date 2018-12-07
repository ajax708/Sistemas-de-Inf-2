<?php

use Faker\Generator as Faker;

$factory->define(App\Paciente::class, function (Faker $faker) {
	$personas = App\Persona::pluck('id')->toArray();
    return [
        //
        'id' => $faker->unique()->randomElement($personas),
        'cod_paciente' => $faker->unique()->isbn10,
        'fecha_nacimiento' => $faker->date,
        'antiguedad' => $faker->date,
        'ultima_solicitud' => $faker->datetime,
    ];
});
