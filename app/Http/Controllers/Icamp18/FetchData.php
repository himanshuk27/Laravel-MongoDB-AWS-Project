<?php

namespace App\Http\Controllers\Icamp18;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use Mail;
use App\Icamp18\Companies as Companies;
use App\Mail\Esummit18\Welcome as EmailWelcome;
use App\Icamp18\Players as Players;
use App\Icamp18\UserAuth as UserAuth;
use App\Esummit18\Players as ESPlayers;

use App\Esummit18\Transaction as ESTrans;

class FetchData extends Controller{

  public function __construct()
  {
    //$this->middleware('icamp.session');
 }

 public function fetch(){
	 
	$data=Companies::where('allow', '!=', false)->get();
	$count=1;
    
	return view('Icamp18.companies')->with('data', $data)->with('count',$count);

		
 
 }
};
 ?>


