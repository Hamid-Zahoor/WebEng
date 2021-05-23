<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class citizenCheck_GroupMWare
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
        if($request->citizen && $request->citizen!="Aus"){
            return redirect('noaccesspath');   
        }
     
      return $next($request);
    }
}
