<?php

namespace App\Http\Middleware;

use Closure;

class PruebaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $valor = null, $mensaje, $bandera)
    {
        $response = $next($request);

        if ($request->ip() === '192.168.10.1') {
            $response->setContent('vete!');
        }

        return $response;
    }
}
