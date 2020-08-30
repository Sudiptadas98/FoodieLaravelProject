<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Restaurants;
use Session;
use Auth;

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
        // echo "hi from MW";
        $path=$request->path();
        if(($path=="ownerlog" || $path=="ownerreg") && (Session::get('owid') || Auth::check()))
        {
            if(Auth::check())
            {
                return redirect('/');
            }
            else if(Session::get('owid'))
            {
                return redirect('/owner/profile');
            }
        }
        else if(($path!="ownerlog" && !Session::get('owid')) && ($path!="ownerreg" && !Session::get('owid')))
        {
            return redirect('/ownerlog');
        }
        
        
        return $next($request);
    }
}
