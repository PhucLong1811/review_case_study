<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    
    protected function redirectTo($request)
    {
        if (! $request->ajax()) {
            return route('Login');
        }
    }
}
