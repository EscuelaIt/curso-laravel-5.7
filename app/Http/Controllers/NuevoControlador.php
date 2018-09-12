<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevoControlador extends Controller
{
    /**
     * Retornar el mensaje principal
     * @return Response
     */
    public function principal(Request $request, $nombre = null)
    {
        $arreglo = range(500, 510);
        $opcional = null;

        return view('main')
            ->with([
                'nombre' => $nombre,
                'apellido' => $request->apellido,
                'arreglo' => $arreglo,
                'opcional' => $opcional,
                'title' => 'Sitio principal',
            ]);
    }

    /**
     * Retornar la vista de acerca
     * @return Response
     */
    public function acerca(Request $request)
    {
        return view('acerca')
            ->with([
                'informacion' => 'Contactenos al 123',
                'title' => 'Acerac del sitio',
            ]);
    }

    /**
     * Retornar la vista de precios
     * @return Response
     */
    public function precios(Request $request)
    {
        return view('precios');
    }
}
