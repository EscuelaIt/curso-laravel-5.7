<?php

use Faker\Generator as Faker;

$factory->define(App\Estudiante::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'carrera' => $faker->randomElement(['ingenieria', 'matematica']),
    ];
});
