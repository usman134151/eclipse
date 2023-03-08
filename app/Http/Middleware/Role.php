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
	 * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
	 * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
	 */
	public function handle(Request $request, Closure $next, $role = null)
	{
		if(Auth::user()->roleUser()->count() != 0)
		{
			$roleName=Auth::user()->roleUser->role->name;
		}
		if($roleName == $role)
		{
			return $next($request);
		}
		return redirect('/'.$roleName.'/dashboard');
	}
}
