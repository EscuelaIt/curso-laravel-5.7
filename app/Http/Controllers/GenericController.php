<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Jobs\ProcesoLargo;

class GenericController extends Controller
{
    public function prueba(Curso $curso)
    {
        ProcesoLargo::dispatch();

        return 'procesado';
    }
}
