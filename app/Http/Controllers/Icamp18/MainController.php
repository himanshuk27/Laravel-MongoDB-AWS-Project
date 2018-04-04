<?php

namespace App\Http\Controllers\Icamp18;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use Mail;
use DB;
use App\Icamp18\Companies as Companies;
use App\Mail\Icamp18\MailAiesec as MailAiesec;
use App\Icamp18\Players as Players;
use App\Icamp18\UserAuth as UserAuth;
use App\Esummit18\Players as ESPlayers;
use App\Mail\Icamp18\BugSubmit as BugSubmit;
use App\Icamp18\Aiesec as Aiesec;
use App\Mail\Icamp18\notify as notify;

use App\Esummit18\Transaction as ESTrans;

class MainController extends Controller{

  public function __construct()
  {
  $this->middleware('icamp.session')->except('getLogo', 'email_verify', 'companyRegister','notify');
 }

 protected function getLogo(){

  return response()->file(public_path() . '/Icamp18/logo/logo.png');

}
 protected function getfile1(){

  return response()->file(public_path() . '/Mail/bootcamp.jpg');

}
protected function applyAiesec(Request $request){

  $email = $request->session()->get('ic_token');

  $fetchAiesec = Aiesec::find($email);

  if($fetchAiesec){
    $result = array( 'type' => 'warning', 'message'=> 'You have already applied for Aiesec.' );
  }

  else{

    $fetchPlayer = Players::where('email', $email)->first();

    $newAiesec = new Aiesec;
    $newAiesec->ic_id = $fetchPlayer->ic_id;
    $newAiesec->email = $email;
    $newAiesec->save();

    Mail::to($fetchPlayer->email)->send(new MailAiesec());

     $result = array( 'type' => 'success', 'message'=> 'Application submitted succesfully!' );

  }

  echo json_encode($result);     

}

protected function submitBug(Request $request){
    try{
      $emailData = array(
        'email'  => $request->input('humanEmail'),
        'id'  => $request->input('sessionId'),
        'report'   => $request->input('bugReport'));

      Mail::to('techies@ecell.org.in')->send(new BugSubmit($emailData));

      $result = array( 'type' => 'success', 'message'=> 'Report Sent Sucessfully! Thank You For Feedback.' );
    } 
    catch(\Exception $e){

      
      $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
    } 


    echo json_encode($result);       

  }


protected function email_verify(Request $request, $token){


  $checkEmail = UserAuth::where('email_token', $token)->first();

  if($checkEmail){

    if($checkEmail->email_status == true){
     return redirect('/dashboard');
   }
   else{
     $checkEmail->email_status = true;
     $checkEmail->save();
     $request->session()->flush();
     $request->session()->put('ic_token', $checkEmail->email);
     $request->session()->put('prof_status', 'false');

       // Mail::to($checkEmail->email)->send(new EmailWelcome);
     return redirect('/profile?email=verified');
   }

 }

 else{
  return redirect('/login?error=invalid_email_token');
}

}


protected function companyRegister(Request $request)
{

 try
 {
  $company = new Company;
  $company->CompanyName = $_POST["CompanyName"];
  $company->CompanyEmail = $_POST["CompanyEmail"];
  $company->CompanyPoc = $_POST["CompanyPoc"];
  $company->CompanyNumber = $_POST["CompanyNumber"];
  $company->CompanyAbout = $_POST["CompanyAbout"];
  $company->IntProfile = $_POST["IntProfile"];
  $company->IntDuration = $_POST["IntDuration"];
  $company->IntLocation = $_POST["IntLocation"];
  $company->IntNumber = $_POST["IntNumber"];
  $company->IntPpo = $_POST["IntPpo"];
  $company->IntStipend = $_POST["IntStipend"];
  $company->IntBranch = $_POST['IntBranch'];
  $company->IntBatch = $_POST["IntBatch"];

  $company->save();

          //return view("Icamp18/index");

  $emailData = array('name'=>$company->CompanyName);

         // Mail::to($_POST['CompanyEmail'])->send(new CompanyEmail($emailData));
  $result = array("type"=>"success","msg"=>"Registration Successful");
}

catch(\Exception $e)
{
 $result = array("type"=>"error","msg"=>"Registration Unsuccessful");
}

echo json_encode($result);

}
 
protected function notify(Request $request)
{
    try{
      $emailData = array(
        'email'  => '123'
        );
        
       $data=array(
          'aman.flames@gmail.com'


       );
      foreach($data as $d)
      {
          Mail::to($d)->send(new notify($emailData));

      }

      //$result = array( 'type' => 'success', 'message'=> 'Report Sent Sucessfully! Thank You For Feedback.' );
    } 
    catch(\Exception $e){

      echo 'Mail not sent';
      //$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
    } 


    //echo json_encode($result);   
     
               
}



}


