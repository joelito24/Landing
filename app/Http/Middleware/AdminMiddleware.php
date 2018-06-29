<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;
use Illuminate\Support\MessageBag;
    

class AdminMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next )
    {
        if (Auth::user()->isAdmin() === true) {
            return $next($request);
        }
        
        Auth::logout();
        $messageBag = new MessageBag;
        $messageBag->add('not_allowed', 'No tienes permiso para ingresar, porque no tienes el rol correcto.');

        return Redirect::to('auth/login')->withErrors($messageBag);
    }

}
