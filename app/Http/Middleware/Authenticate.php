<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    
    public function handle($request, $next, $guard = null)
    {   

        switch ($guard) 
        {
            case 'admin': $login='admin.login'; break;
             
            default: $login='login'; break;

            //
        }
        
        return redirect()->guest(route($login));
    }

    protected function redirectTo($request)
    {

        if (! $request->expectsJson())
        {
            return route('login');
        }
    }
}
