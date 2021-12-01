<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check())
        return redirect('login');

    $user = Auth::user();

    if($user->isAdmin())
    {
         return $next($request);
    }
       
    else if($user->isIntern())
    {
         return $next($request);
    }

    else if($user->isStaff())
    {
         return $next($request);
    }

    else if($user->isUser())
    {
         return $next($request);
    }
       

    return redirect('login');
    }
}
