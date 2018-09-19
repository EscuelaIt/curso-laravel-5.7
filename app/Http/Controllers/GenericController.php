<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Profesor;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function mostrar($id = null)
    {
        $cursos = Curso::get(['id', 'titulo']);

        dd($cursos);
        return view('generic.crear')->with([
            'profesores' => Profesor::all(),
        ]);
    }

    public function crear(Request $request)
    {
        $reglas = [
            'titulo' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'profesor_id' => 'required|exists:profesores,id',
        ];

        $request->validate($reglas);

        $curso = Curso::create($request->all());
    }
}
