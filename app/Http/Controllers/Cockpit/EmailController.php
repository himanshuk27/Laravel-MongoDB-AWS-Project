<?php

namespace App\Http\Controllers\Cockpit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Cockpit\Members as Members;
use Mail;
use App\Mail\Cockpit\EmailPromo as EmailPromo;
use App\Esummit18\Players as Players;
use App\Esummit18\Newsletter as ES_Newsletter;
use App\KIITEcell\Newsletter as ECELL_Newsletter;
use App\KIITEcell\Participants as Makovation;
use App\Cockpit\Test as Test;
use App\Icamp18\Aiesec as Aiesec;
use App\Cockpit\TrackBus1 as TrackBus1;
use App\Cockpit\TrackBus2 as TrackBus2;
use App\Cockpit\TrackTech1 as TrackTech1;
use App\Cockpit\TrackTech2 as TrackTech2;
use App\Cockpit\TrackTech3 as TrackTech3;
use App\Cockpit\TrackTech4 as TrackTech4;

class EmailController extends Controller{

	public function __construct()
	{
		$this->middleware('cockpit.session');
	}

  protected function testxyz(Request $request){
    $email = Session::get('login_token');

      $Member = Members::where('email', $email)->first();

      if($Member){
        return view('Cockpit.emailtest')->with('member', $Member);
      }

      else
        return redirect('/logout');

    }
  

    protected function initEmailArray($request){

        $array = [];

   /*     if($request->input('emailDb')){
            foreach ($request->input('emailDb') as $db) {

                try {

                   switch ($db) {
                       case 'player_business_1':
                       $array += TrackBus1::pluck('email')->toArray();
                       break;
                       case 'player_business_2':
                       $array += TrackBus2::pluck('email')->toArray();
                       break;
                       case 'player_tech_1':
                       $array += TrackTech1::pluck('email')->toArray();
                       break;
                       case 'player_tech_2':
                       $array += TrackTech2::pluck('email')->toArray();
                       break;
                       case 'player_tech_3':
                       $array += TrackTech3::pluck('email')->toArray();
                       break;
                       case 'player_tech_4':
                       $array += TrackTech4::pluck('email')->toArray();
                       break;
                        
                       default:                      
                       break;
                   }

               } catch (Exception $e) {

               }


           }
       } */

       if($request->input('sendEmail')){
        $array += explode(",", $request->input('sendEmail'));
      }


     $array += Aiesec::pluck('email')->toArray();

  
    

    return $array;

}

protected function previewEmail(Request $request){
    if($request->isMethod('get')){
      try {

        if($request->session()->has('previewData')){
            $data = $request->session()->get('previewData');
            $request->session()->forget('previewData');
            $view = $data['layout'];
            return view($view)->with('data', $data);
        }
        
      } catch (Exception $e) {
         $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
      }
        
    }

    else{

        try{

          $emailContent = $request->input('emailContent');

          $emailContent2 = base64_encode ( $emailContent);

            $emailData = array('content' => $emailContent2, 'layout' => $request->input('emailTemp'));

            Session::put('previewData', $emailData);
            $result = array( 'type' => 'success', 'message'=> 'done' );


        }   

    catch(\Exception $e){
     $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
    
 }
 echo json_encode($result);

    }

    

  

}


protected function emailPromoInit(Request $request){

    $input_array = array('emailDomain', 'emailId', 'emailTemp', 'emailContent', 'emailSubject', 'emailDb', 'sendEmail');
    $allow = true;

    try{

       if( !$request->input('sendEmail') ){
        if( !$request->input('emailDb') )
            $allow = false;
    } 

    foreach ($input_array as $input) {
        if($input == 'emailDb')
            break;

        else if($input == 'sendEmail') 
            break; 

        else {
            if( !$request->input($input) )
                $allow = false;
        }
    }

    if($allow == true){

        $result = array('sendmail' => 'true');

        $fromEmail = $request->input('emailId').$request->input('emailDomain');

        $fromName = 'KIIT Ecell';



        switch ($request->input('emailDomain')) {
            case '@ecell.org.in':
                $fromName = 'KIIT Entrepreneurship Cell';
                break;
            case '@esummit.org.in':
                $fromName = 'KIIT E-Summit\' 18';
                break;            
            default:
                break;
        }

         if($request->input('emailTemp') == 'Icamp18.email_layouts.email_aisec')
          $fromName = 'Internship Camp \'18';

       $emailContent = $request->input('emailContent');

     //   $emailContent = ' ';

            $emailData = array('subject' => $request->input('emailSubject'), 'from' => $fromEmail, 'content' => $request->input('emailContent'), 'layout' => $request->input('emailTemp'), 'fromName' => $fromName);
       


        

        $sendArray = $this->initEmailArray($request);
        $count = 0;
        $emailStat = [];
        $emailId = [];
        foreach ($sendArray as $email) { 
            $count += 1;           
            $label = 'email'.$count;
            Mail::to($email)->queue(new EmailPromo($emailData));
            $result += array($label => $email);           

        }

        $result += array( 'type' => 'success', 'message'=> 'Mail Sent Successfuly!', 'count' => $count );


    }

    else{
        $result = array( 'type' => 'warning', 'message'=> 'Some of the required field is empty!' );
    }

}

catch(\Exception $e){
    $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
}

echo json_encode($result);

}
}