<?php

namespace App\Http\Controllers\Icamp18;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use App\Icamp18\Companies as Companies;
use App\Icamp18\UserAuth as UserAuth;
use App\Icamp18\Players as Players;
use Hash;

class CompanyDashController extends Controller{

  public function __construct()
  {
  $this->middleware('icamp.compSession')->except('authenticate_comp');
 }

 protected function showDash(Request $request){

  $email = $request->session()->get('ic_comp_token');

  $fetchComp = Companies::where('CompanyEmail', $email)->first();

  $fetchId = explode(',', $fetchComp->applied_id);
  $array = [];

  foreach ($fetchId as $value) {
    $fetchPlayer = Players::where('ic_id', $value)->first();
    if($fetchPlayer){
       array_push($array, $fetchPlayer);
    }
   
   
  }

  if($fetchId){
    $count = 0 ;
       return view('Icamp18.companyDash')->with('data', $fetchComp)->with('data2', $array)->with('count', $count);
  }
  else{
       return view('Icamp18.companyDash')->with('data', $fetchComp);
  } 

  

 }  


protected function authenticate_comp (Request $request){
    $userEmail = $request->input('userEmail');
    $userPass = $request->input('userPass');

    try {

      $fetchAuth = UserAuth::find($userEmail);      

    if($fetchAuth){

      $fetchComp = Companies::where('CompanyEmail', $userEmail)->first();

      if($fetchComp){
         if($fetchAuth->type == 'Startup'){

         if( Hash::check($userPass, $fetchAuth->password) ){
          $request->session()->flush();
          $request->session()->put('ic_comp_token', $fetchComp->CompanyEmail);
         $result = array( 'type' => 'success', 'message'=> 'Login Successful' );
      }

      else{
        $result = array( 'type' => 'error', 'message'=> "Incorrect Password!" );
      }


      }
      else{
         $result = array( 'type' => 'error', 'message'=> "User is not Startup type!" );
      }
      }

      else{
        $result = array( 'type' => 'error', 'message'=> "Company Not registered" );
      }

     
     


    }


    else{
      $result = array( 'type' => 'error', 'message'=> "Email not registered!" );
    }


      
    }



     catch (Exception $e) {
     $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
 }


 echo json_encode($result); 

    

}


}


