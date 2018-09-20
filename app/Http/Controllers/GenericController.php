<?php

namespace App\Http\Controllers;

use App\Curso;

class GenericController extends Controller
{
    public function prueba(Curso $curso)
    {
        abort(501);
    }
}
