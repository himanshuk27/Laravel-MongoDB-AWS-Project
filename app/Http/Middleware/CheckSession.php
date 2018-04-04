<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckSession
{

	public function handle($request, Closure $next)
	{  
		if (!$request->session()->exists('sessionId')) {

			return redirect('/login');

		}

		else {
			return $next($request);
		}


	}
}
