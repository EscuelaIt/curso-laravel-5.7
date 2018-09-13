<?php

namespace App\Http\Controllers;

use App\Estudiante;

class EstudianteController extends Controller
{
    public function mostrarTodos()
    {
        $estudiantes = Estudiante::all();

        return view('estudiantes.mostrar')->with(['estudiantes' => $estudiantes]);
    }
}
