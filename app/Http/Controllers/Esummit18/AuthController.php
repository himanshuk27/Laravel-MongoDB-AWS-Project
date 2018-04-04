<?php

namespace App\Http\Controllers\Esummit18;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Esummit18\PageController;
use Illuminate\Http\Request;
use App\Esummit18\Players as Players;
use App\Esummit18\UserAuth as UserAuth;
use Hash;
use Mail;
use App\Mail\Esummit18\EmailVerify;
use Cookie;
use Session;
use DB;
use App\Mail\Esummit18\PasswordReset;
use CheckProfile;
use App\Mail\Esummit18\Welcome as EmailWelcome;

class AuthController extends Controller{    

    protected function set_new_pass(Request $request){
        $token = $request->input('token');
        $hashEmail = $request->input('hashEmail');
        try{
          $fetchAuth = UserAuth::where('pass_reset_token', $token)->first();
          
          if($fetchAuth){
            if(Hash::check($fetchAuth['email'], base64_decode($hashEmail))){                    
                $fetchAuth->password = Hash::make($request->input('humanPass'));
                $fetchAuth->save();
                $result = array( 'type' => 'success', 'message'=> 'New Password Saved Successfully!' );
                echo json_encode($result);                    
            }
            else
              $result = array( 'type' => 'error', 'message'=> 'Key and Token Mismatch!' ); 
      }
      else{
        $result = array( 'type' => 'error', 'message'=> 'Incorrect or Expired Reset Token!' );
    }  
}

catch(\Exception $e){
    $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
} 
}   

protected function send_reset_mail(Request $request){
    $email = $_POST['humanEmail'];
    $hashEmail = Hash::make($email);

    try{
        $fetchPlayer = Players::where('email', $email)->first();

        if($fetchPlayer){
            $fetchAuth = UserAuth::where('email', $email)->first();
            if($fetchAuth){
                $token = bin2hex(random_bytes(32));
                $fetchAuth->pass_reset_token = $token;
                $fetchAuth->save();

                $emailData = array('humanEmail' => base64_encode($hashEmail), 
                    'pass_reset_token' => $token,
                    'humanName' => $fetchPlayer['name'] );

                Mail::to($_POST['humanEmail'])->send(new PasswordReset($emailData));

                $result = array( 'type' => 'success', 'message'=> 'Password Recovery Email Sent' ); 
            }
            else{
             $result = array( 'type' => 'error', 'message'=> 'Unknow error, try using you ES-Id.' ); 
         }
     }
     else{
        $result = array( 'type' => 'error', 'message'=> 'This email is not registered' );
    }


}

catch(\Exception $e){
    $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
} 


echo json_encode($result);


}

protected function authenticate_player(Request $request){

    $result = null;

    try{

        $checkEmail = DB::connection('mongodb_esummit18')->collection('players')->where('email', $_POST['userEmail'])->first();
        $checkAuth = DB::connection('mongodb_esummit18')->collection('userAuth')->where('email', $_POST['userEmail'])->first();

        if($checkEmail){
            if(Hash::check($_POST['userPass'], $checkAuth['password'])){
                if($checkEmail['email_status'] == false){
                    $result = array( 'type' => 'error', 'message'=> 'Email not verified! Please check your inbox.' ); 
                }
                else{
                    Session::flush();
                    $request->session()->push('sessionId', $checkEmail['id']);
                    $result = array( 'type' => 'success', 'message'=> 'Login Succesful' ); 
                }

            }
            else{
             $result = array( 'type' => 'error', 'message'=> 'Incorrect Password!' ); 
         }
     }
     else{
         $result = array( 'type' => 'error', 'message'=> 'Incorrect Email or Not Registered!' ); 
     }

 }

 catch(\Exception $e){
    $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
} 


echo json_encode($result); 
}     

protected function savePlayer($id){

    $Players = new Players;

    $Players->id = $id;
    $Players->name = $_POST['cand_name'];
    $Players->email = $_POST['newEmail'];
    $Players->prof_status = false;
    if (isset($_POST["phone"]))
        $Players->mobile_no = $_POST["phone"];
    else

        $Players->email_status = false;

    if (isset($_POST["ref_id"]) && !empty($_POST["ref_id"])){
        $a = str_replace('o', 'X', $_POST["ref_id"]);
  $b = str_replace('O', 'X', $a);
  $c = str_replace('0', 'X', $b);
        $Players->ref_id = $c;
    }
    
    $Players->save(); 
}

protected function register_player(Request $request){

    $a = str_replace('o', 'X', str_random(5));
  $b = str_replace('O', 'X', $a);
  $c = str_replace('0', 'X', $b);

    $id = 'ES18_'.strtoupper($c);
    $token = bin2hex(random_bytes(32));
    $emailData = array(
        'email'  => $_POST['newEmail'],
        'token'   => $token);

    $password = Hash::make($_POST['newPass']);
    $UserAuth = new UserAuth;

    $result = null;

    try{
        $checkEmail = DB::connection('mongodb_esummit18')->collection('players')->where('email', $_POST['newEmail'])->first();
        if($checkEmail){
            $result = array( 'type' => 'error', 'message'=> 'This Email Id Already Exists!' );
        }
        else {

            if( !empty($_POST['ref_id']) && CheckProfile::checkRefId($_POST['ref_id']) == false){
            
                    $result = array( 'type' => 'error', 'message'=> 'Please Enter a valid Campuspreneur id.' );
               
            }

            else{
                 $this->savePlayer($id);

            $UserAuth->email = $_POST['newEmail'];
            $UserAuth->password = $password;
            if (isset($_POST["phone"]))
                $UserAuth->mobile_no = $_POST["phone"];
            $UserAuth->email_token = $token;
            $UserAuth->save();    

            Session::flush();
            $request->session()->push('sessionId', $id);



            Mail::to($_POST['newEmail'])->send(new EmailVerify($emailData));

            $result = array( 'type' => 'success', 'message'=> 'Registration Success, Email Sent!' );
            }

            
        }
    }   

    catch(\Exception $e){
        $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
    } 


    echo json_encode($result );


}

protected function logout(){
    Session::flush();
    return redirect()->route('es_login');
}

protected function email_verify(Request $request, $token){


    $checkEmail = DB::connection('mongodb_esummit18')->collection('userAuth')->where('email_token', $token)->first();
    $checkProf = DB::connection('mongodb_esummit18')->collection('players')->where('email', $checkEmail['email'])->first();

    if($checkEmail){
        DB::connection('mongodb_esummit18')->collection('players')->where('email', $checkEmail['email'])
        ->update(['email_status' => true]);
        Session::flush();

        Mail::to($checkEmail['email'])->send(new EmailWelcome);
        $request->session()->push('sessionId', $checkProf['id']);
        return redirect('dashboard?email=verified');
    }

    else{
        return redirect()->route('es_login');
    }
    
}


}


