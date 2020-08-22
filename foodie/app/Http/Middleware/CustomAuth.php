<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Restaurants;

class CustomAuth
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
        // if ($user->id == $restaurants->user_id) {
        //     return $next($request);
        // }
        // dd($request->user()->id);
        
        
        return $next($request);
    }
}
