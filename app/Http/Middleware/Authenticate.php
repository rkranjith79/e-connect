<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            $urlPrefix = explode('/', URL::to(Route::current()->uri()))[3] ?? null;
            if($urlPrefix == 'admin') {
                return route('login');
            } else {
                return route('user-login');
            }
            
        }
    }
}
