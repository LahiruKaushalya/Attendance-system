<?php

namespace App\Http\Middleware;

use \Illuminate\Auth\Middleware\Authenticate;

class Authenticate
{
	public function handle($request, Closure $next, $guard = null){
		if(Auth::guard($guard)->guest()){
			if ($request->ajex()){
				return responce('unauthorized',401);
			}else{
				return redirect()->route('home');
			}
		}
		return $next($request);
	}
}
