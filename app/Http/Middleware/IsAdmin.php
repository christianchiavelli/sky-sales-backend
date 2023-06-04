<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response)  $next
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
	 */
	public function handle(Request $request, Closure $next)
	{
		if (Auth::user() && Auth::user()->role == 'admin') {
			return $next($request);
		}

		return abort(403, 'Acesso negado');
	}
}