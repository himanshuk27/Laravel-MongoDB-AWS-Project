<?php

namespace App\Http\Controllers\Icamp18;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use Mail;
use DB;
use App\Icamp18\Companies as Companies;
use App\Mail\Esummit18\Welcome as EmailWelcome;
use App\Icamp18\Players as Players;
use App\Icamp18\UserAuth as UserAuth;
use App\Esummit18\Players as ESPlayers;
use Carbon\Carbon;

use App\Esummit18\Transaction as ESTrans;

class ProfileController extends Controller{

  public function __construct()
  {
  $this->middleware('icamp.session')->except('savePlayer', 'update_profile');
 }


protected function getResume(Request $request){

  $email = $request->session()->get('ic_token');
  $fetchPlayer = Players::where('email', $email)->first();

  return response()->file(public_path() . '/Icamp18/resume/'.$fetchPlayer->ic_id.'.pdf');

}

protected function uploadResume(Request $request){
  try {

    $file=$request->file_resume;
    $name = $file->getClientOriginalName();
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    if($ext == 'pdf'){
      $fetchPlayer = Players::where('email', $request->session()->get('ic_token'))->first();
      $file_name = $fetchPlayer->ic_id.'.pdf';
      $file_path = public_path().'/Icamp18/resume/';
      $fetchPlayer->resume = '/Icamp18/resume/'.$file_name;
      $fetchPlayer->save();

      $file->move($file_path, $file_name);

      $result = array( 'type' => 'success', 'message'=> 'Resume Upload Complete' );
    }
    else{
      $result = array( 'type' => 'error', 'message'=> 'Only pdf files are allow ' );
    }

    


  }



  catch (Exception $e) {
    $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
  } 
  echo json_encode($result); 
}


protected function savePlayer($request){
  $email = $request->session()->get('ic_token');
  $fetchPlayer = Players::where('email', $request->session()->get('ic_token'))->first();  

  if($fetchPlayer){
   $fetchPlayer->name = $request->input('name');
   $fetchPlayer->mobile_no = $request->input('mobile_no');
   if(!empty($request->input('smobile')))
    $fetchPlayer->smobile = $request->input('smobile');

  if(!empty($request->input('univ_name')))
    $fetchPlayer->univ_name = $request->input('univ_name');
  else
    $fetchPlayer->univ_name = $request->input('univ_kiit');
  $fetchPlayer->univ_roll = $request->input('univ_roll');
  $fetchPlayer->univ_year = $request->input('univ_year');
  $fetchPlayer->univ_branch = $request->input('univ_branch');    

  $fetchPlayer->save();
}

else{
 $newPlayer = new Players;
 $a = str_replace('o', 'X', str_random(4));
 $b = str_replace('O', 'X', $a);
 $c = str_replace('0', 'X', $b);

 $id = 'IC18_'.strtoupper($c);
 $newPlayer->ic_id = $id;
 $newPlayer->email = $request->session()->get('ic_token');
 $newPlayer->name = $request->input('name');
 $newPlayer->mobile_no = $request->input('mobile_no');
 if($request->has('smobile'))
  $newPlayer->smobile = $request->input('smobile');

if($request->has('univ_name'))
  $newPlayer->univ_name = $request->input('univ_name');
else
  $newPlayer->univ_name = $request->input('univ_kiit');
$newPlayer->univ_roll = $request->input('univ_roll');
$newPlayer->univ_year = $request->input('univ_year');
$newPlayer->univ_branch = $request->input('univ_branch');
$newPlayer->selected_comp = 0;

if($request->session()->get('prof_status') == 'es'){

 $fetchTrans = ESTrans::where([
            ['email', 'LIKE', '%'.$email.'%'],
            ['amount', 999],
            ['status', 'Credit']
          ])->first();

$fetchTrans2 = ESTrans::where([
            ['email', 'LIKE', '%'.$email.'%'],
            ['amount', 999],
            ['purpose', 'ESIC_Cash']
          ])->first();

$fetchTrans3 = ESTrans::where([
            ['email', 'LIKE', '%'.$email.'%'],
            ['status', 'Credit']
          ])->first();


$fetchTrans4 = ESTrans::where([
            ['email', 'LIKE', '%'.$email.'%'],
            ['purpose', 'ESIC_Cash']
          ])->first();

$fetchTrans5 = ESTrans::where([
        ['email', 'LIKE', '%'.$email.'%'],
        ['amount', 999],
        ['t_id', '<', 999]
      ])->first();



  if($fetchTrans){
      $newPlayer->payment = true;
      $newPlayer->payment_amount = $fetchTrans->amount;
    }

    elseif ($fetchTrans2) {
      $newPlayer->payment = true;
      $newPlayer->payment_amount = $fetchTrans2->amount;
    }

    elseif ($fetchTrans3) {
      $newPlayer->payment = false;
      $newPlayer->payment_amount = $fetchTrans3->amount;
    }

    elseif ($fetchTrans4) {
      $newPlayer->payment = false;
      $newPlayer->payment_amount = $fetchTrans4->amount;
    }

    elseif ($fetchTrans5) {
        $newPlayer->payment = true;
        $newPlayer->payment_amount = $fetchTrans5->amount;
      }



   

}

$newPlayer->save();
}

}

protected function update_profile(Request $request){
 
  $array = array('name', 'mobile_no', 'univ_roll', 'univ_year', 'univ_branch', 'univ_kiit');
  
  $allow = true;

  foreach ($array as $value) {
    $input = $request->input($value);
    if(empty($input))
      $allow = false;
  }

  if($request->input('univ_kiit') != 'kiit'){
    if(empty($request->input('univ_name')))
      $allow = false; 
  }

  try {

    if($allow == true){ 

      $this->savePlayer($request);
      $request->session()->put('prof_status', 'true');

      $result = array( 'type' => 'success', 'message'=> 'Profile Updated!' ); 
    }

    else{
      $result = array( 'type' => 'error', 'message'=> 'One of the required field is empty!');
    }


  } catch (Exception $e) {
    $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
  }



  echo json_encode($result); 
}




}


