<?php

namespace App\Http\Middleware;

use Closure;

class CompanyCheck
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
		$user = $request->user();

		if( $user && $user->type == 'company'){
			return $next($request);
		}

		$privilegeError = "You are not a <strong>company</strong>. You don't have permission to see this page";
		return view('errors.privilege',compact('privilegeError'));
	}
}
