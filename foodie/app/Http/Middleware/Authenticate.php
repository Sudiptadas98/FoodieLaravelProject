<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Session;
use Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {

    //         if(Session::get('owid'))
    //         {
    //             return route('owner/profile');
    //         }
    //         else
    //         {
    //             return route('login');
    //         }
    //         return route('login');
    //     }
    // }

    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {

            if(Session::get('owid'))
            {
                return redirect('owner/profile');
            }
            else
            {
                return redirect('login');
            }
            // return route('login');
        }
        return $next($request);
    }
}
