<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() === null){
            exit(
                json_encode(
                    array(
                    'error' => 1,
                    'message' => 'You are logged out, Login again.',
                    'loggedIn' => 0
                    )
                )
            );
        }else{
            return $next($request);
        }
    }
    }

