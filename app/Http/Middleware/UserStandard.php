<?php

namespace App\Http\Middleware;

use Closure;

class MDusuariostandard
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
        
      if (auth()->check() && auth()->users()->is_admin<=0)
      {
        return redirect('usuario.index');
      }
    
    }
}
