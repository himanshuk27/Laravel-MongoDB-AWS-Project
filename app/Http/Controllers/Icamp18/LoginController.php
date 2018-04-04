<?php

namespace App\Http\Controllers\Icamp18;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Icamp18\Players as Players;
use App\Icamp18\UserAuth as UserAuth;
use App\Esummit18\Players as ESPlayers;
use App\Esummit18\UserAuth as ESUserAuth;
use Hash;
use Mail;
use App\Mail\Icamp18\EmailVerify;
use CheckProfile;
use App\Mail\Icamp18\PasswordReset;

class LoginController extends Controller{

	protected function check(){

	}

	protected function authenticate_player(Request $request){

    $request->session()->put('test6', true);
        
        $userEmail = $request->input('userEmail');
        $userPass = $request->input('userPass');

        try {            

            $fetchAuth = UserAuth::find($userEmail);
            $fetchUser = Players::where('email', $userEmail)->first();

            if($fetchAuth){

                if($fetchAuth->email_status == true){
                    if( Hash::check($userPass, $fetchAuth->password) ){

                        if($fetchUser){
                             $request->session()->put('prof_status', 'true');
                            $request->session()->put('ic_token', $userEmail);
                        }
                        else{
                            $request->session()->put('ic_token', $userEmail);
                            $request->session()->put('prof_status', 'false');
                        }                       
                        $es = CheckProfile::setESPay($userEmail);
                        $result = array( 'type' => 'success', 'message'=> 'Login Successful' );

                    }
                    else{
                     $result = array( 'type' => 'error', 'message'=> 'Incorrect Password!' );
                 }

             }

             else{
                $result = array( 'type' => 'error', 'message'=> 'Email not verified!' );
            }

        }

        else{
         $result = array( 'type' => 'error', 'message'=> 'User not registered!' );
     }

 } catch (Exception $e) {
     $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
 }


 echo json_encode($result); 
}     

protected function authenticate_player_es(Request $request){

  $request->session()->put('test6', true);

    $userEmail = $request->input('userEmail');
    $userPass = $request->input('userPass');

    try {

        $fetchICAuth = UserAuth::find($userEmail);            

        if($fetchICAuth){

            $fetchICUser = Players::where('email', $userEmail)->first();

            if($fetchICAuth->email_status == true){
                if( Hash::check($userPass, $fetchICAuth->password) ){

                    $request->session()->put('ic_token', $userEmail);
                    
                    if($fetchICUser)
                        $request->session()->put('prof_status', 'true');                    
                    
                    else
                        $request->session()->put('prof_status', 'es');
                   
                     $es = CheckProfile::setESPay($userEmail);
                    $result = array( 'type' => 'success', 'message'=> 'Login Successful' );

                }
                else{                    
                 $result = array( 'type' => 'error', 'message'=> 'Incorrect Password!' );
             }

         }

         else{
            $result = array( 'type' => 'error', 'message'=> 'Email not verified!' );
        }

    }
    else{

        $fetchESAuth = ESUserAuth::where('email', $userEmail)->first();
        $fetchESUser = ESPlayers::where('email', $userEmail)->first();

        if($fetchESAuth && $fetchESUser){

            if( Hash::check($userPass, $fetchESAuth->password) ){
                $newAuth = new UserAuth;
            $newAuth->email = $fetchESAuth->email;
            $newAuth->mobile_no = $fetchESAuth->mobile_no;
            $newAuth->email_status = true;
            $newAuth->password = $fetchESAuth->password;
            $newAuth->save();

            $request->session()->put('ic_token', $userEmail);
            $request->session()->put('prof_status', 'es');
             $es = CheckProfile::setESPay($userEmail);
            $result = array( 'type' => 'success', 'message'=> 'Login Successful' );
            }
            else{
                 $result = array( 'type' => 'error', 'message'=> 'Incorrect Esummit Password!' );
             }

            
        }

        else{
            $result = array( 'type' => 'error', 'message'=> 'Incorrect Esummit Email!');
       }

   }



} catch (Exception $e) {
   $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
}


echo json_encode($result); 
}     

protected function register_player(Request $request){

    $email = $request->input('userEmail');
    $password = $request->input('userPass');   

    try {

       $fetchAuth = UserAuth::find($email);

        if($fetchAuth){
            $result = array( 'type' => 'error', 'message'=> 'This Email already Exists!');
        }
        else{
            $token = bin2hex(random_bytes(32));
    $emailData = array(
        'email'  => $email,
        'token'   => $token);

            $newAuth = new UserAuth;
            $newAuth->email = $email;
            $hashPass = Hash::make($password);
            $newAuth->password = $hashPass;
            $newAuth->email_status = false;
            $newAuth->email_token = $token;
            $newAuth->save();

             Mail::to($email)->send(new EmailVerify($emailData));

            $result = array( 'type' => 'success', 'message'=> 'Registration Success, Email Sent!' );

        }


    }  catch (Exception $e) {
       $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
   }



   echo json_encode($result );


}

protected function logout(Request $request){
    $request->session()->flush();
    return redirect('/login');
}

protected function logoutComp(Request $request){
    $request->session()->flush();
    return redirect('/login/company');
}

protected function set_new_pass(Request $request){
        $token = $request->input('token');
        $hashEmail = $request->input('hashEmail');
        try{
          $fetchAuth = UserAuth::where('pass_reset_token', $token)->first();
          
          if($fetchAuth){
            if(Hash::check($fetchAuth['email'], base64_decode($hashEmail))){                    
                $fetchAuth->password = Hash::make($request->input('humanPass'));
                $fetchAuth->pass_reset_token = 'null';
                $fetchAuth->save();
                if($fetchAuth->type = 'Startup'){
                  $redirect = '/login/company';
                }
                else{
                  $redirect = '/login';
                }
                $result = array( 'type' => 'success', 'message'=> 'New Password Saved Successfully!', 'redirect' => $redirect );
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
    $email = $request->input('humanEmail');
    $hashEmail = Hash::make($email);
    $es = $request->input('es');

    try{
       

        if(empty($es)){
           $fetchPlayer = Players::where('email', $email)->first();
           $fetchAuth = UserAuth::where('email', $email)->first();
        }

        else{
           $fetchPlayer = ESPlayers::where('email', $email)->first();
           $fetchAuth = ESUserAuth::where('email', $email)->first();
        }

        if($fetchPlayer){
            
            if($fetchAuth){
                $token = bin2hex(random_bytes(32));
                $fetchAuth->pass_reset_token = $token;
                $fetchAuth->save();

                $emailData = array('humanEmail' => base64_encode($hashEmail), 
                    'pass_reset_token' => $token,
                    'humanName' => $fetchPlayer['name'] );

                Mail::to($email)->send(new PasswordReset($emailData));

                $result = array( 'type' => 'success', 'message'=> 'Password Recovery Email Sent' ); 
            }
            else{
             $result = array( 'type' => 'error', 'message'=> 'Unknow error.' ); 
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

 protected function showForgot(Request $request, $hashEmail, $token){
     $fetchAuth = UserAuth::where('pass_reset_token', $token)->first();

        $data = array(
        'email'  => $hashEmail,
        'token'   => $token);

        if($fetchAuth){
                if(Hash::check($fetchAuth['email'], base64_decode($hashEmail))){
                    return view('Icamp18.login_reset')->with('data', $data);
                }
                else
                  return redirect('/login'); 
        }
        else{
            return redirect('/login');
        }  
  }


}


