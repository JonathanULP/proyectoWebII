<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Encargado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->rol->id != 2)
        {
            return back()->with('error','Usted no tiene permisos para ingresar a esta sección');
        }
        else
        {
            return $next($request);
        }
    }
}
