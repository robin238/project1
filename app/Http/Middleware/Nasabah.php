<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Nasabah
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next)
    {   
        if (Auth::guard('nasabah')->user()) {
                return $next($request);
        } 
    

        return redirect('/login');
    }
}
