<?php

namespace App\Http\Controllers;

class MiControlador extends Controller
{
    /**
     * Retornar un mensaje de saludo
     * @return Response
     */
    public function saludar($nombre, $apellido = null)
    {
        return "Hola {$nombre} {$apellido}";
    }
}
