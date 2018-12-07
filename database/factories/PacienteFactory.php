<?php

use Faker\Generator as Faker;

$factory->define(App\Paciente::class, function (Faker $faker) {
	$personas = App\Persona::pluck('id')->toArray();
	$user = App\User::all()->random();
    return [
        //
        'user_is'			=> $user->id,
        'fecha_nacimiento' 	=> $faker->date,
        'ultima_solicitud' 	=> $faker->datetime,
    ];
});
