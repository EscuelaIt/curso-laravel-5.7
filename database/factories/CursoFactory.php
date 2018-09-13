<?php

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(App\Curso::class, function (Faker $faker) {
    $profesores = Profesor::all();

    return [
        'titulo' => $faker->sentence(mt_rand(2, 4)),
        'descripcion' => $faker->paragraph(4),
        'profesor_id' => $profesores->random()->id,
    ];
});
