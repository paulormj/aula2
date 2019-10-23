<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Carbon;

class verificaHora
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Carbon::setLocale("pt_BR");
        $horaAtual = Carbon::now()->setTimezone('America/Sao_Paulo')->format('%H');
        //dd($horaAtual);
        if($horaAtual>12){
            return $next($request);
        }
        return redirect('/');
    }
}
