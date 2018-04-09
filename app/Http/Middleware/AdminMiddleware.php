<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class AdminMiddleware
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
        if(Sentinel::check())
            return $next($request);
        else
            return redirect()->route('adminLogin')->with(['flash_level'=>'warning','flash_message'=>'You should login before access Admin Panel.']);
    }
}
