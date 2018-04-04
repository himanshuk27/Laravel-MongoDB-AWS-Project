<?php

namespace App\Http\Controllers\KIITEcell;

use App\Http\Controllers\Controller;
use Request;

class PageController extends Controller{

	 public function __construct()
    {
       // $this->middleware('check.session')->except('showLogin', 'showLanding');

      //  $this->middleware('log')->only('index');

      //  $this->middleware('subscribed')->except('store');
    }

	

	protected function showLanding(Request $request){

        return view('KIITEcell.index');

	}


	


}

    
