<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class IcampCompSession
{

	public function handle($request, Closure $next)
	{

		if( Session::has('ic_comp_token') ){

			
				return $next($request);
			

		}

		else{
			Session::flush();
			return redirect('/login/company');
		}

		

		
		
	}
}
