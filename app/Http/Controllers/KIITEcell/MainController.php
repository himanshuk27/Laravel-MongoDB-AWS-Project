<?php

namespace App\Http\Controllers\KIITEcell;

use App\Http\Controllers\Controller;
use DB;
use Mail;
use App\Mail\KIITEcell\EmailVerify;
use App\Mail\KIITEcell\notify;
use App\KIITEcell\Participants as Participants;
use App\KIITEcell\StartupYatra_participants as Sparticipant;
use App\KIITEcell\Newbies as Newbies;
use App\Mail\KIITEcell\ContactForm as ContactForm;
use Illuminate\Http\Request;

class MainController extends Controller{

	public function __construct()
	{
       // $this->middleware('check.session')->except('showLogin', 'showLanding');

      //  $this->middleware('log')->only('index');

      //  $this->middleware('subscribed')->except('store');
	}

	protected function getLogo(Request $request){

		return response()->file(public_path() . '/KIITEcell/logo/logosmall.png');

	}

	protected function contactForm(Request $request){
	try{
			$emailData = array(
				'email'  => $request->input('email'),
				'name'	=> $request->input('name'),
				'subject'	=> $request->input('subject'),
				'message'   => $request->input('message')
			);

			Mail::to('pcr@ecell.org.in')->send(new ContactForm($emailData));

			$result = array( 'type' => 'success', 'message'=> 'Email Sent Sucessfully! Thank You For Feedback.' );
		} 
		catch(\Exception $e){
			
			$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
		} 


		echo json_encode($result);   	
	}

	protected function newbieReg(Request $request){

		$array = array('name', 'email', 'roll_no', 'branch', 'year', 'time_slot', 'team', 'message_team', 'message_main');
		$allow = true;

		foreach ($array as $field) {
				if (empty($_POST[$field])) {
					$allow = false;
				}
			}

		if($_POST['year'] == 'Second'){
			if(empty($_POST['message_3']))
				$allow = false;
		}	

			if($allow == false)
				$result = array( 'type' => 'warning', 'message'=> 'No required field should be empty!' );

			else{
				try{

			$CheckNewbie = Newbies::where('email', $_POST['email'] )->first();

			if($CheckNewbie)
				$result = array( 'type' => 'error', 'message'=> 'This Email Already Exists!' );
			else{

				$id = str_random(5);
				$Newbies = new Newbies;
				$Newbies->id = $id;
				$Newbies->name = $_POST['name'];
				$Newbies->email = $_POST['email'];
				$Newbies->roll_no = $_POST['roll_no'];
				$Newbies->branch = $_POST['branch'];
				$Newbies->year = $_POST['year'];
				$Newbies->time_slot = $_POST['time_slot'];
				$Newbies->team = $_POST['team'];
				$Newbies->message_team = $_POST['message_team'];
				$Newbies->message_main = $_POST['message_main'];
				$Newbies->message_3 = $_POST['message_3'];
				$Newbies->save();
				$result = array( 'type' => 'success', 'message'=> 'Details Submitted Successfuly!' );
			}
		}

		catch(\Exception $e){
			$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
		}
			}

		

		echo json_encode($result);
	}

	

	protected function newsletter_reg(Request $request){

		$id = str_random(8);

		$result;

		$checkEmail = DB::connection('mongodb_ecell')->collection('newsletter_subs')->where('Email', $_POST['email'])->first();

		if($checkEmail){
			$result = array( 'type' => 'error', 'message'=> 'This Email Already Exists!' );
		}

		else{
			$query = DB::connection('mongodb_ecell')->collection('newsletter_subs')->insert(['Email' => $_POST['email'], 'Id' => $id]);

			$result = array( 'type' => 'success', 'message'=> 'Newsletter Subscribed!' );
		}

		echo json_encode($result);	



	}

	

	protected function registerMakovation(Request $request)
	{

		  $a = str_replace('o', 'X', str_random(4));
  $b = str_replace('O', 'X', $a);
  $c = str_replace('0', 'X', $b);

    $id = 'MV'.strtoupper($c);
		

		$participant = new Participants;
		$participant->TeamName = $_POST["TeamName"];
		$participant->Theme = $_POST["Theme"];

		$participant->Name_mem1 = $_POST["Name_mem1"];
		$participant->Roll_mem1 = $_POST["Roll_mem1"];
		$participant->Email_mem1 = $_POST["Email_mem1"];
		$participant->Mobile_mem1 = $_POST["Mobile_mem1"];
        $participant->id = $id;
		$participant->Address = $_POST["Address"];
		$participant->Reason = $_POST["Reason"];

		try
		{

			$participant->Name_mem2 = $_POST["Name_mem2"];
			$participant->Roll_mem2 = $_POST["Roll_mem2"];
			$participant->Email_mem2 = $_POST["Email_mem2"];
			$participant->Mobile_mem2 = $_POST["Mobile_mem2"];

		}

		catch(Exception $e)
		{

		}

		try
		{

			$participant->Name_mem3 = $_POST["Name_mem3"];
			$participant->Roll_mem3 = $_POST["Roll_mem3"];
			$participant->Email_mem3 = $_POST["Email_mem3"];
			$participant->Mobile_mem3 = $_POST["Mobile_mem3"];

		}

		catch(Exception $e)
		{

		}

		try
		{

			$participant->Name_mem4 = $_POST["Name_mem4"];
			$participant->Roll_mem4 = $_POST["Roll_mem4"];
			$participant->Email_mem4 = $_POST["Email_mem4"];
			$participant->Mobile_mem4 = $_POST["Mobile_mem4"];

		}

		catch(Exception $e)
		{

		}

		finally
		{
			$participant->save();
			 // $emailData = array(
		  //       'TeamID'  => $id
		  //       );

			 //   Mail::to($_POST['Email_mem1'])->send(new EmailVerify($emailData));


			$result = array("type"=>"success","msg"=>"Registration Successful");
			echo json_encode($result);
			

		}




	}

	protected function makovationMail(Request $request)
	{

		$emailData = array(
		        'TeamID'  => '12'
		        );
		$participants = Participants::get();
		foreach ($participants as $participant) {
			Mail::to($participant->Email_mem1)->send(new EmailVerify($emailData));
		}

		


		//Mail::to('sjana646@gmail.com')->send(new EmailVerify($emailData));
	}

	protected function startupyatraRegister(Request $request)
	{
		

		$participant = new Sparticipant;

		try
		{
			$participant->name = $_POST["name"];
			$participant->email = $_POST["email"];
			$participant->college = $_POST["college"];
			$participant->mobile = $_POST["mobile"];

			$participant->save();

			$result = array("type"=>"success","msg"=>"Registration Successful");
		}

		catch(\Exception $e)
		{
			$result = array("type"=>"success","msg"=>"Critical Error");
		}

		echo json_encode($result);

	}

	protected function sendMail(Request $request)
	{
		
		$emailData = array(
		        'TeamID'  => '123'
		        );

		 //Mail::to('sjana646@gmail.com')->send(new notify($emailData));

		$newbies;
        $newbie;

        // $mails = array('sjana646@gmail.com','1707194@kiit.ac.in', '1705530@kiit.ac.in', '1601187@kiit.ac.in', '1604536@kiit.ac.in', '1728232@kiit.ac.in', '1604004@kiit.ac.in', '1705039@kiit.ac.in', '1705478@kiit.ac.in', '1705074@kiit.ac.in', '1701206@kiit.ac.in', '1705078@kiit.ac.in', '1705084@kiit.ac.in', '1604042@kiit.ac.in', '1609012@kiit.ac.in', '1628144@kiit.ac.in', '1628181@kiit.ac.in', '1729175@kiit.ac.in', '1606456@kiit.ac.in', '1605242@kiit.ac.in', '1605272@kiit.ac.in', '1629106@kiit.ac.in', '1607043@kiit.ac.in', '1606186@kiit.ac.in', '1606300@kiit.ac.in', '1606052@kiit.ac.in', '1606083@kiit.ac.in', '1605477@kiit.ac.in', '1605479@kiit.ac.in', '1728096@kiit.ac.in', '1605544@kiit.ac.in', '1604352@kiit.ac.in', '1705603@kiit.ac.in', '1705588@kiit.ac.in', '1606293@kiit.ac.in', '1606299@kiit.ac.in', '1629054@kiit.ac.in');

        $mails = array("ruwatiadipansu@gmail.com","surajjhakumar.jha@gmail.com","harshvardhanberia@gmail.com","aditiagrawal454@gmail.com","crazyshubham12@gmail.com","kvivekkumarthakur94@gmail.com","siddp06@rediffmail.com","yoyosssubham@gmail.com","salokbhatt@gmail.com","arushi3107@yahoo.com",
        	"sangeetapadhy2015@gmail.com","souravrout859@gmail.com","sharmaranu252@gmail.com","akipidchou@gmail.com","rahul.putatunda20@gmail.com","binayagarwal20@gmail.com","ranikarmakar291198@gmail.com","utkarsh.alankrit@gmail.com","hemantdadhich.1999@gmail.com","shinyisha98@gmail.com");


        foreach ($mails as $mail) {
           Mail::to($mail)->send(new notify($emailData));
        }
		
		

		  // $mails = array("abhiagarwal.agarwal2@gmail.com","biditabasu20@gmail.com","dasrituparna133@gmail.com","antarixmusic@gmail.com","manna.s.1999@gmail.com","sksinhaknp@gmail.com","1705736@kiit.ac.in","dishaa.k1412@gmail.com","1705687@kiit.ac.in","shriya.jha2017@gmail.com","1705611@kiit.ac.in","1705581@kiit.ac.in","akshatanurag1998@gmail.com","tanmay13samal@gmail.com","1705546@kiit.ac.in","1705452@kiit.ac.in","1705444@kiit.ac.in","singhnikita050@gmail.com","rishikasinx999@gmail.com","pratyaynag1@gmail.com","amlan.bidwan358@gmail.com","shivamraiece@gmail.com","balajipolaki.97@gmail.com","pspattanaik1999@gmail.com","1701101@kiit.ac.in","followme.saubhagya@gmail.com","rohan.michaelite@gmail.com","1629154@kiit.ac.in","piyushprasad12345@gmail.com","rai.aditi75@gmail.com","abhinavkumaroctober23@gmail.com","1629099@kiit.ac.in","1629048@kiit.ac.in","saikatsikdar1498@gmail.com","1628041@kiit.ac.in","niketrajdvd@gmail.com","1607166@kiit.ac.in","manishi.mukhopadhyay@gmail.com","simransinha1998@gmail.com","lakshyachawla10@gmail.com","chamanchowdhary@gmail.com","1606316@kiit.ac.in","rahulmnn1998@gmail.com","prishanga1@gmail.com","ayush3120.deep@gmail.com","1606206@kiit.ac.in","1606198@kiit.ac.in","riya.mob.2012@gmail.com","pkagnihotri69@gmail.com","1605614@kiit.ac.in","1605546@kiit.ac.in","1605445@kiit.ac.in","1605442@kiit.ac.in","swetanshu2011@gmail.com","spruhapadhi@gmail.com","debasishmahana49@gmail.com","payalgaurav021@gmail.com","ashtina.6@gmail.com","Bhaswati31@gmail.com","srijitadas.r@gmail.com","1604093@kiit.ac.in","iamsamratsen@gmail.com");

//         $mails = array(

//         	"1730002@kiit.ac.in",
// "1706314@kiit.ac.in",
// "1706152@kiit.ac.in",
// "1706025@kiit.ac.in",
// "1705745@kiit.ac.in",
// "1705738@kiit.ac.in",
// "1705736@kiit.ac.in",
// "1705694@kiit.ac.in",
// "1705687@kiit.ac.in",
// "1705637@kiit.ac.in",
// "1705611@kiit.ac.in",
// "1705581@kiit.ac.in",
// "1705577@kiit.ac.in",
// "1705561@kiit.ac.in",
// "1705546@kiit.ac.in",
// "1705452@kiit.ac.in",
// "1705444@kiit.ac.in",
// "1705335@kiit.ac.in",
// "1705159@kiit.ac.in",
// "1705153@kiit.ac.in",
// "1704801@kiit.ac.in",
// "1704556@kiit.ac.in",
// "1702182@kiit.ac.in",
// "1702180@kiit.ac.in",
// "1701101@kiit.ac.in",
// "1629171@kiit.ac.in",
// "1629164@kiit.ac.in",
// "1629154@kiit.ac.in",
// "1629152@kiit.ac.in",
// "1629122@kiit.ac.in",
// "1629119@kiit.ac.in",
// "1629099@kiit.ac.in",
// "1629048@kiit.ac.in",
// "1628102@kiit.ac.in",
// "1628041@kiit.ac.in",
// "1607395@kiit.ac.in",
// "1607166@kiit.ac.in",
// "1607073@kiit.ac.in",
// "1606472@kiit.ac.in",
// "1606435@kiit.ac.in",
// "1606421@kiit.ac.in",
// "1606316@kiit.ac.in",
// "1606289@kiit.ac.in",
// "1606285@kiit.ac.in",
// "1606264@kiit.ac.in",
// "1606206@kiit.ac.in",
// "1606198@kiit.ac.in",
// "1606047@kiit.ac.in",
// "1606035@kiit.ac.in",
// "1605614@kiit.ac.in",
// "1605546@kiit.ac.in",
// "1605445@kiit.ac.in",
// "1605442@kiit.ac.in",
// "1605324@kiit.ac.in",
// "1605319@kiit.ac.in",
// "1605269@kiit.ac.in",
// "1605206@kiit.ac.in",
// "1605108@kiit.ac.in",
// "1604346@kiit.ac.in",
// "1604322@kiit.ac.in",
// "1604093@kiit.ac.in",
// "1601293@kiit.ac.in"
//         );














		// `

		//$newbies = Newbies::where('time_slot','=','11am - 2pm')->get();

		// try
		// {
		// 	foreach ($newbies as $newbie) {

		// 		if(filter_var($newbie->email, FILTER_SANITIZE_EMAIL))
		// 		{
		// 			Mail::to($newbie->email)->send(new notify($emailData));
		// 		}
				
		 	
		//  } 

		// }

		// catch(\Exception $e)
		// {
  //           echo $newbie->email;  
		// }

		


	 }

	


}


