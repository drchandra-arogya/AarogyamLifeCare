<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class PatientMiddleware
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
        if(Auth::user()->hasAnyRole('patient')) {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status','You are not allwed to Admin Dashboard');
        }
    }
}
