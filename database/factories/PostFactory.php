<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'titulo' => $faker->sentence(mt_rand(2, 4)),
        'descripcion' => $faker->paragraph(2),
        'contenido' => $faker->paragraph(3),
    ];
});
