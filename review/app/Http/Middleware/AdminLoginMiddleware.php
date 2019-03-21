<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminLoginMiddleware
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
       if (Auth::check()) {
           if ($request->user()->level == '1') {
             return $next($request);
           }
           return redirect('');
       }
       else
        return redirect()->route('Login'); 
    }
}
