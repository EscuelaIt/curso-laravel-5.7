<?php

namespace App\Http\Controllers;

use App\Curso;

class GenericController extends Controller
{
    public function mostrar($id = null)
    {
        $curso = Curso::findOrFail($id);

        $valor = Curso::all()->pluck('titulo', 'profesor_id')->all();

        dd($valor);

        return view('generic.mostrar')->with(['valores' => $valores]);
    }
}
