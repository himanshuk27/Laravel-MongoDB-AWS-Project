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
use Carbon\Carbon;

use App\Esummit18\Transaction as ESTrans;

class CompanyListController extends Controller{

  public function __construct()
  {
    $this->middleware('icamp.session');
 }

 protected function remStartup(Request $request, $ic_id){

  $email = $request->session()->get('ic_token');
   $fetchPlayer = Players::where('email', $email)->first();
   $userID = $fetchPlayer->ic_id;
  $fetchComp = Companies::where([
    ['ic_id', '=', $ic_id],
    ['applied_id', 'LIKE', '%'.$userID.'%']
    ])->first();
 
  try {

    if($fetchComp){

      $data = explode(',', $fetchPlayer->undo_exp);


      foreach($data as $value) {
        if (strpos($value, $ic_id) !== false) {
          $applyDate = explode('$', $value);
          $data31 = $value;
        }
      }
      
      $undo_exp = $applyDate[1];
      $today = date('Y-m-d H:i:s');
      $timediff = strtotime($today) - strtotime($undo_exp);

      if($timediff > 43200){
        $result = array( 'type' => 'error', 'message'=> 'You can\'t change this selection after 12 hrs.');
      }
      else{

        $array = explode(',', $fetchComp->applied_id);        
          if (($key = array_search($fetchPlayer->ic_id, $array)) !== false) {
            unset($array[$key]);
          }          
        

        $newId = implode(',', $array);
        $fetchComp->applied_id = $newId;
        $fetchComp->save();

        $array = explode(',', $fetchPlayer->undo_exp);
         if (($key = array_search($data31, $array)) !== false) {
            unset($array[$key]);
          } 

        $fetchPlayer->undo_exp = implode(',', $array);
        $fetchPlayer->selected_comp--;
        $fetchPlayer->save();


        $result = array( 'type' => 'success', 'message'=> 'Startup Removed Successfully');


      }

    }
    else{
      $result = array( 'type' => 'error', 'message'=> 'Unknown Error! Startup not found.' );
    }


    
  } catch (Exception $e) {
  $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
} 
echo json_encode($result); 
}

protected function saveStartup(Request $request, $ic_id){

  $email = $request->session()->get('ic_token');
  $fetchComp = Companies::find($ic_id);
  $fetchPlayer = Players::where('email', $email)->first();

  if($fetchComp && $fetchPlayer){

    try {

      $bookmark_id = $fetchComp->bookmark_id;
      $player_id = $fetchPlayer->ic_id;

      if (strpos($bookmark_id, $player_id) !== false) {

        $result = array( 'type' => 'error', 'message'=> 'This Startup is already in your bookmark.' );

      }

      else{       

        if(empty($fetchComp->bookmark_id)){
          $fetchComp->bookmark_id = $fetchPlayer->ic_id;
        }

        else{
          $fetchComp->bookmark_id .= ','.$fetchPlayer->ic_id;
        }

        $fetchComp->save();

        $result = array( 'type' => 'success', 'message'=> 'Bookmark saved Successfully.' );    

      }

    
  }  


  catch (Exception $e) {
    $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
  }

  }

  else{
    $result = array( 'type' => 'error', 'message'=> 'Unknown Error!' );
  }
   
  echo json_encode($result); 
}

protected function applyStartup(Request $request, $ic_id){

  $email = $request->session()->get('ic_token');
  $fetchComp = Companies::find($ic_id);
  $fetchPlayer = Players::where('email', $email)->first();

  if($fetchComp && $fetchPlayer){

    try {

      $applied_id = $fetchComp->applied_id;
      $player_id = $fetchPlayer->ic_id;

      if (strpos($applied_id, $player_id) !== false) {

        $result = array( 'type' => 'error', 'message'=> 'You have alredy applied to this Startup!' );

      }

      else{

        if (empty($fetchPlayer->resume)) {
        $result = array( 'type' => 'warning', 'message'=> 'Upload Your Resume First!' );
       
      }

      else if ($fetchPlayer->selected_comp == 4) {
        $result = array( 'type' => 'warning', 'message'=> 'You can only apply to max 4 Startups.' );
      }

        else {

        if(empty($fetchComp->applied_id)){
          $fetchComp->applied_id = $fetchPlayer->ic_id;
        }

        else{
          $fetchComp->applied_id .= ','.$fetchPlayer->ic_id;
        }

        $fetchComp->save();

        $fetchPlayer->selected_comp += 1;
        $date = date('Y-m-d H:i:s');
        if(empty($fetchPlayer->undo_exp)){
          $fetchPlayer->undo_exp = $ic_id.'$'.$date;
        }
        else{
          $fetchPlayer->undo_exp .= ','.$ic_id.'$'.$date; 
        }

        $fetchPlayer->save();

        $result = array( 'type' => 'success', 'message'=> 'Application submitted Successfully' );

      } 

      }

    
  }  


  catch (Exception $e) {
    $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
  }

  }

  else{
    $result = array( 'type' => 'error', 'message'=> 'Unknown Error!' );
  }
   
  echo json_encode($result); 
}



protected function fetchComp(Request $request, $ic_id){
  $fetchStartup = Companies::find($ic_id);
  try {
    if($fetchStartup){
     $result = array( 'ic_id' => $fetchStartup->ic_id, 'type' => 'success', 'CompanyName'=> $fetchStartup->CompanyName, 'CompanyAbout' => $fetchStartup->CompanyAbout, 'logo' => $fetchStartup->logo, 'IntProfile' => $fetchStartup->IntProfile, 'IntDuration' => $fetchStartup->IntDuration, 'IntStipend' => $fetchStartup->IntStipend, 'IntLocation' => $fetchStartup->IntLocation, 'IntPpo' => $fetchStartup->IntPpo );
   }
   else{
    $result = array( 'type' => 'error', 'message'=> 'Startup not found!' );
  }
}
catch (Exception $e) {
  $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
} 
echo json_encode($result); 
}





}


