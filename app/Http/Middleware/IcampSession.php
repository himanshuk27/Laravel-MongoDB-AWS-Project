<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class IcampSession
{

	public function handle($request, Closure $next)
	{

		if(Session::has('test6')){

			$prof_status = Session::get('prof_status');
		if( Session::has('ic_token') ){

			if($prof_status == 'true'){
				return $next($request);
			}
			else{
				return redirect('/profile');
			}

		}

		else{
			Session::flush();
			return redirect('/login');
		}

		}
		else{
			Session::flush();
			return redirect('/login');
		}

		
		
	}
}
