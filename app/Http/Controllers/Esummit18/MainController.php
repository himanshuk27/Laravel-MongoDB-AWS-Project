<?php

namespace App\Http\Controllers\Esummit18;

use App\Http\Controllers\Controller;
use Request;
use DB;
use Session;
use App\Esummit18\Players as Players;
use App\Esummit18\UserAuth as UserAuth;
use App\Esummit18\Transaction as Transaction;
use App\Esummit18\Esummit_ID as Fuck;
use Mail;
use App\Mail\Esummit18\EmailVerify;
use App\Mail\Esummit18\EmailPaymentBanner;
use App\Mail\Esummit18\PaymentConfirmation;
use App\Mail\Esummit18\PromotionalMail;
use App\Mail\Esummit18\AccoMail;
use App\Mail\Esummit18\BugSubmit as BugSubmit;
use App\Esummit18\TechTrack as TechTrack;
use App\Esummit18\BusinessTrack as BusinessTrack;
use App\Esummit18\InnovationTrack as InnovationTrack;
use App\Esummit18\StartupTrack as StartupTrack;
use App\Esummit18\Campus as Campus;
use CheckProfile;
use App\Mail\Esummit18\certificate;
use App\Mail\Esummit18\certificate_Ar;
use App\Mail\Esummit18\certificate_BL;

class MainController extends Controller{

	public function __construct()
	{
       $this->middleware('check.session')->only('enrollCampus', 'enrollTrack', 'updateProfile');

      //  $this->middleware('log')->only('index');

      //  $this->middleware('subscribed')->except('store');
	}

	protected function newsletter_reg(Request $request){
		$id = str_random(8);
		try{
			$checkEmail = DB::connection('mongodb_esummit18')->collection('newsletter_subs')->where('email', $_POST['email'])->first();	

			if($checkEmail)
				$result = array( 'type' => 'error', 'message'=> 'This Email Already Exists!' );
			
			else{
				$query = DB::connection('mongodb_esummit18')->collection('newsletter_subs')->insert(['email' => $_POST['email'], 'id' => $id]);
				$result = array( 'type' => 'success', 'message'=> 'Newsletter Subscribed!' );
			}		
		}
		catch(\Exception $e){
			$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
		}

		echo json_encode($result); 	
	}

	protected function enrollCampus(Request $request){
		$Campus = new Campus;
		$a = str_replace('o', 'X', str_random(5));
		$b = str_replace('O', 'X', $a);
		$c = str_replace('0', 'X', $b);

		if($_POST['enroll'] == 'true'){
			try{
				$esid = Session::get('sessionId');
				$fetchCampus = Campus::find($esid[0]);
				$fetchPlayer = Players::where('id', $esid[0])->first();
				if($fetchCampus)
					$result = array( 'type' => 'error', 'message'=> 'You are already our Campuspreneur! No need to apply again.' );
				else if(CheckProfile::id($esid[0]) == true){

					$Campus->es_id = $esid[0];
					$Campus->ref_id = strtoupper($c);
					$Campus->save();

					$result = array( 'type' => 'success', 'message'=> 'You are now a Campuspreneur!' );
				}
				else
					$result = array( 'type' => 'error', 'message'=> 'Please update your profile!' );				
			}
			catch(\Exception $e){
				$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
			}

			echo json_encode($result); 
		}


	}

	protected function enrollStartup(){
		
	}	

	protected function enrollTrack(Request $request){
		/*
		$track = Request::input('track');		
		$esid = Session::get('sessionId');
		$fetchPlayer = Players::where('id', $esid[0])->first();
		$fetchid_tech = TechTrack::find($esid[0]);
		$fetchid_business = BusinessTrack::find($esid[0]);
		$fetchid_innovation = InnovationTrack::find($esid[0]);
		try{
			$TechTrack = new TechTrack;
			$BusinessTrack = new BusinessTrack;
			$InnoTrack = new InnovationTrack;
			$trackInit_status = $fetchPlayer['trackInit_status'];
			switch ($track) {
				case 'tech':
				$why = $_POST['why'];
				if($fetchid_tech){
					$fetchid_tech->es_id = $esid[0];
					$fetchid_tech->why = $why;
					$fetchid_tech->save();
				}	
				else{
					$TechTrack->es_id = $esid[0];
					$TechTrack->why = $why;
					$TechTrack->save();
				}				
				$fetchPlayer->trackInit_status = $fetchPlayer['trackInit_status'] ? $trackInit_status+1 : 1;
				$fetchPlayer->track = 'tech';
				$fetchPlayer->save();
				$result = array( 'type' => 'success', 'message'=> 'Tech & Design track selected successfully.' );
				break;

				case 'business':
				$why = $_POST['why'];
				if($fetchid_business){
					$fetchid_business->es_id = $esid[0];
					$fetchid_business->why = $why;
					$fetchid_business->save();
				}	
				else{
					$BusinessTrack->es_id = $esid[0];
					$BusinessTrack->why = $why;
					$BusinessTrack->save();
				}	

				$fetchPlayer->trackInit_status = $fetchPlayer['trackInit_status'] ? $trackInit_status+1 : 1;
				$fetchPlayer->track = 'business';
				$fetchPlayer->save();				

				$result = array( 'type' => 'success', 'message'=> 'Business & Marketing track selected successfully.' );
				break;

				case 'innovation':

				if($fetchid_innovation){
					$fetchid_innovation->es_id = $esid[0];
					$fetchid_innovation->prototype = $_POST['prototype'];
					$fetchid_innovation->idea = $_POST['idea'];
					$fetchid_innovation->tech_used = $_POST['tech_used'];
					$fetchid_innovation->usp = $_POST['usp'];
					$fetchid_innovation->category = $_POST['category'];
					$fetchid_innovation->status = $_POST['status'];
					$fetchid_innovation->required_fund = $_POST['required_fund'];
					$fetchid_innovation->no_team = $_POST['no_team'];
					$fetchid_innovation->required_time = $_POST['required_time'];
					$fetchid_innovation->save();
				}	
				else{
					$InnoTrack->es_id = $esid[0];
					$InnoTrack->prototype = $_POST['prototype'];
					$InnoTrack->idea = $_POST['idea'];
					$InnoTrack->tech_used = $_POST['tech_used'];
					$InnoTrack->usp = $_POST['usp'];
					$InnoTrack->category = $_POST['category'];
					$InnoTrack->status = $_POST['status'];
					$InnoTrack->required_fund = $_POST['required_fund'];
					$InnoTrack->no_team = $_POST['no_team'];
					$InnoTrack->required_time = $_POST['required_time'];
					$InnoTrack->save();
				}	

				$fetchPlayer->trackInit_status = $fetchPlayer['trackInit_status'] ? $trackInit_status+1 : 1;
				$fetchPlayer->track = 'business';
				$fetchPlayer->save();				

				$result = array( 'type' => 'success', 'message'=> 'Business & Marketing track selected successfully.' );
				break;

				case 'startup':
				$esid = Session::get('sessionId');
		$fetchTrackStartup = StartupTrack::find($esid[0]);

		if(CheckProfile::id($esid[0]) == false)
			$result = array( 'type' => 'error', 'message'=> 'Profile Incomplete! Please complete your profile.' );

		elseif ($fetchPlayer->prof_type != 'Startup') {
			$result = array( 'type' => 'error', 'message'=> 'Profile type must be set to Startup!' );
		}

		else if($fetchTrackStartup)
			$result = array( 'type' => 'warning', 'message'=> 'You are already enrolled in Startup Planet!' );

		else{
			$StartupTrack = new StartupTrack;
			$StartupTrack->es_id = $esid[0];
			$StartupTrack->save();
			$result = array( 'type' => 'success', 'message'=> 'Registration Successful for Startup Planet!' );
		}
		$fetchPlayer->trackInit_status = $fetchPlayer['trackInit_status'] ? $trackInit_status+1 : 1;
				$fetchPlayer->track = 'startup';
				$fetchPlayer->save();
				break;	

				default:
				$result = array( 'type' => 'error', 'message'=> 'No track selected!' );
			}
		} 
		catch(\Exception $e){
			$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
		} 

		
		echo json_encode($result);  */
		$result = array( 'type' => 'error', 'message'=> 'Track selection is not available!' );
		echo json_encode($result);
	}

	protected function submitBug(Request $request){
		try{
			$emailData = array(
				'email'  => $_POST['humanEmail'],
				'id'	=> $_POST['sessionId'],
				'report'   => $_POST['bugReport']);

			Mail::to('techies@ecell.org.in')->send(new BugSubmit($emailData));

			$result = array( 'type' => 'success', 'message'=> 'Report Sent Sucessfully! Thank You For Feedback.' );
		} 
		catch(\Exception $e){

			
			$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
		} 


		echo json_encode($result);       

	}

	protected function getLogo1(Request $request){

		return response()->file(public_path(). "/Esummit18/logo/logo_1.png");        

	}

	protected function getLogo2(Request $request){

		return response()->file(public_path(). "/Esummit18/logo/logo_small.png");        

	}

	protected function getLogo3(Request $request){

		return response()->file(public_path(). "/Esummit18/logo/logo_new.png");        

	}

		protected function getPanda(Request $request){

		return response()->file(public_path(). "/Esummit18/logo/panda1.png");        

	}

	// 	protected function getPanda(Request $request){

	// 	return response()->file(public_path(). "/Esummit18/logo/panda1.png");        

	// }


	protected function casestudy(Request $request)
	{
		return response()->file(public_path(). "/Esummit18/assets/indigo-case_study_2.pdf"); 
	}

	protected function saveProf(){
		try{
			$esid = Session::get('sessionId');
			$fetchProf = Players::find($esid[0]);
			if($fetchProf){
				$fetchProf->mobile_no = $_POST['mobile_no'];
				$fetchProf->smobile = $_POST['smobile'];
				$fetchProf->address = $_POST['address'];
				$fetchProf->city = $_POST['city'];
				$fetchProf->state = $_POST['state'];
				$fetchProf->country = $_POST['country'];
				$fetchProf->pincode = $_POST['pincode'];				
				$fetchProf->prof_type = $_POST['prof_type'];

				if($_POST['prof_type']=='Student'){
					if(isset($_POST['univ_name']) && $_POST['univ_kiit'] != 'kiit' )
						$fetchProf->univ_name = $_POST['univ_name'];
					else if(isset($_POST['univ_kiit']))
						$fetchProf->univ_name = 'kiit';
					$fetchProf->univ_roll = $_POST['univ_roll'];
					$fetchProf->univ_year = $_POST['univ_year'];
					$fetchProf->univ_branch = $_POST['univ_branch'];
				}
				else if($_POST['prof_type']=='Startup'){
					$fetchProf->start_name = $_POST['start_name'];
					$fetchProf->start_addr = $_POST['start_addr'];
					$fetchProf->start_tin = $_POST['start_tin'];
					$fetchProf->start_about = $_POST['start_about'];
					$fetchProf->start_prod = $_POST['start_prod'];
					$fetchProf->start_pop = $_POST['start_pop'];
				}
				else{
					$fetchProf->job_name = $_POST['job_name'];
					$fetchProf->job_pos = $_POST['job_pos'];
				}

				$fetchProf->prof_status = true;
				$fetchProf->save();

				$result = array( 'type' => 'success', 'message'=> 'Profile Updated!' ); 
			}

			else{
				$result = array( 'type' => 'error', 'message'=> 'Unknow Error: Profile not found!' );
			}

		}	
		catch(\Exception $e){
			$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
		}

		echo json_encode($result);  	
	
	}

	protected function updateProfile(Request $request){
		$empty = '';
		$array = array('prof_type', 'name', 'mobile_no', 'address' , 'city', 'state', 'country', 'pincode');
		$allow = true;

		switch($_POST['prof_type']){
				case 'Student': 
				$prof_type = array('univ_roll', 'univ_year', 'univ_branch');
				break;
				case 'School Student':
				$prof_type = array('univ_roll');
				break;
				case 'Professional (Job)':
				$prof_type = array('job_name', 'job_pos');
				break;	
				case 'Startup':
				$prof_type = array('start_name', 'start_addr', 'start_pop', 'start_about', 'start_prod');
				break;
				default :
				break;
			}			
			if(isset($_POST['univ_kiit']))
				array_push($prof_type, 'univ_kiit');			

			if(isset($_POST['univ_name']))
				array_push($prof_type, 'univ_kiit');

			$prof = array_merge($array,$prof_type);

		foreach ($prof as $field) {
				if (empty($_POST[$field])) {
					$allow = false;
				}
			}

		if($allow == true){
			$this->saveProf();
		}
		else{
			$result = array( 'type' => 'error', 'message'=> 'One of the required field is empty!');
			echo json_encode($result);  
		}

	}

	protected function sendPaymentConfirmationMail(Request $request)
	{

		try
		{
			
            
		
	         // $Payers = Fuck::where('track','tech')->get();
			$Payers = Fuck::all();


	         $payer;
	         foreach ($Payers as $payer) {
	         	

               $emailData = array(
               'es_id'  => '123');

               Mail::to($payer->email)->send(new PaymentConfirmation($emailData));
               

	         }
	        //   $emailData = array(
         //        'es_id'  => '23');
	        // Mail::to('sjana646@gmail.com')->send(new PaymentConfirmation($emailData));

	        //$result = array("type"=>"success","msg"=>'Sent');
	             

		}

		catch(\Exception $e)
		{
            //echo $payer->email;
            //$result = array("type"=>"error","msg"=>$payer->email);
		}



		//echo json_encode($result);
       
		
	}


	protected function setAcco(Request $request,$token)
	{
		
		$email = UserAuth::where('acco_token',$token)->first()->email;
		
		$player = Players::where('email',$email)->first();

		$player->acco = 1;
		$player->save();

	}


	
	protected function sendPromotionMail(Request $request)
	{

		$mails = array();

        $mail;

      $emailData = array("token"=>'123');

      try
      {

		      // 	 foreach($mails as $mail)
		      // {

		      
		      // 		 	if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
				    //     Mail::to($mail)->send(new PromotionalMail($emailData));
			     //       }

        //       }

         Mail::to('sjana646@gmail.com')->send(new PromotionalMail($emailData));
     }

     

      	catch(\Exception $e)
      	{
      		echo $mail;
      	}

		     
     
      	
      
	}

	protected function showStats(Request $request)
	{
		$players_count = Players::count();
		$payment_count = Players::where("payment",true)->get()->count();

    $Players = Players::all();
    $TechCount = 0;
    $InnovationCount = 0;
    $BusinessCount = 0;


    $Tech = TechTrack::all();
    $Innovation = InnovationTrack::all();
    $Business = BusinessTrack::all();

    foreach ($Tech as $tech) {
      foreach ($Players as $player) {
        if(($tech->es_id == $player->id)&& ($player->payment == true))
          $TechCount++;
      }
    }

    foreach ($Innovation as $innovation) {
      foreach ($Players as $player) {
        if(($innovation->es_id == $player->id)&& ($player->payment == true))
          $InnovationCount++;

      }
    }

    foreach ($Business as $business) {
      foreach ($Players as $player) {
        if(($business->es_id == $player->id)&& ($player->payment == true))
          $BusinessCount++;
      }
    }

		return view("Esummit18.RegistrationLive")->with('PlayersCount',$players_count)->with('PaymentCount',$payment_count)->with('TechCount',$TechCount)->with('BusinessCount',$BusinessCount)->with('InnovationCount',$InnovationCount);
	}

		


protected function showImageName(){

       $files = glob(public_path(). "/Esummit18/CERTIS_ESUMMIT/Blockchain/*.*");
       for ($i=2; $i<count($files);$i++)
       {
            $image = $files[$i];
            $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
            );

            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_file)) 
            {
                $code=basename($image);
                $main_code=explode('_AR_VR.jpg',$code) ;
                $fetchPlayer = Fuck::where('es_id',$main_code[0])->get();
  

                if($fetchPlayer)
                {
                	foreach ($fetchPlayer as $data) {
                	   $emailData = array('id' => $main_code[0]);
                       Mail::to($data->email)->send(new certificate_BL($emailData));
                	}
                	//return view('Icamp18.test3')->with('fetchPlayer',$fetchPlayer);
                }
                //echo $main_code[0]."<br />";
                // echo basename($image)."<br />";
            } 
            else
            {
                continue;
            }
        } 
     }	

    protected function downloadC($id)
	{
         		
           return response()->download(public_path(). "/Esummit18/CERTIS_ESUMMIT/Participation/".$id."_PARTICIPATION.jpg");   
	}

    protected function downloadCAR($id)
	{
         		
           return response()->download(public_path(). "/Esummit18/CERTIS_ESUMMIT/AR_VR/".$id."_AR_VR.jpg");   
	}

    protected function downloadCBL($id)
	{
         		
           return response()->download(public_path(). "/Esummit18/CERTIS_ESUMMIT/Blockchain/".$id."_AR_VR.jpg");   
	} 
}


