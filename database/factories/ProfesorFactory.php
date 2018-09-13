<?php

use Faker\Generator as Faker;

$factory->define(App\Profesor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'profesion' => $faker->randomElement(['ingenieria', 'matematica']),
    ];
});
