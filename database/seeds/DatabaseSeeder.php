<?php

use App\Curso;
use App\Profesor;
use App\Estudiante;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesor::class, 50)->create();

        $cantidadEstudiantes = 500;
        factory(Estudiante::class, $cantidadEstudiantes)->create();

        $cursos = factory(Curso::class, 40)->create()
            ->each(function ($curso) use ($cantidadEstudiantes) {
                $curso->estudiantes()
                    ->attach(array_rand(range(1, $cantidadEstudiantes), 40));
            });

    }
}
