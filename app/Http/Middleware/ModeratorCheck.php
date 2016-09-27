<?php

namespace App\Http\Middleware;

use Closure;

class ModeratorCheck
{
	/**
	* Handle an incoming request.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \Closure  $next
	* @return mixed
	*/
	public function handle($request, Closure $next){
		$user = $request->user();

		if( $user && $user->type == 'moderator'){
			return $next($request);
		}

		return 'You are not an admin';
	}
}
