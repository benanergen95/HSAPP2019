<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
<<<<<<< HEAD
        if (! $request->expectsJson()) {
            return route('login');
        }
=======
        return route('login');
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
    }
}
