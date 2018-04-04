<?php

namespace App\Http\Controllers\Cockpit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CheckProfile;
use App\Esummit18\Players as Players;
use Mail;
use App\Mail\Esummit18\PaymentConfirmation;
use App\KIITEcell\CashES18 as CashES18;
use App\Jobs\sendBulkMail as sendBulkMail;
use App\Esummit18\Transaction as Transaction;
use App\Icamp18\UserAuth as UserAuth;
use Lab123\AwsSns\Messages\AwsSnsMessage;	

class SweepController extends Controller{

	protected function logout(Request $request){
		Session::flush();
		return redirect('/login');
	}

	protected function getFile(Request $request){

		return response()->file(public_path(). "/Mail/Case-study-Patnjali.pdf");        

	}

	protected function getFile2(Request $request){

		return response()->file(public_path(). "/Mail/Solved-Examples-10.pdf");        

	}

	protected function getFile3(Request $request){

		return response()->file(public_path(). "/Mail/FlytCode-KIIT-Participants-Guide.pdf");        

	}

	protected function getFile4(Request $request){

		return response()->file(public_path(). "/Mail/Case-Study-Airtel-Payment-Bank.pdf");        

	}

	protected function getFile5(Request $request){

		return response()->file(public_path(). "/Mail/Retail-Case-Study.pdf");        

	}


	protected function sweep(Request $request){


	$fetchTrans = CashES18::all();
	foreach ($fetchTrans as $trans) {
		
			$fetchProf = Players::where('email', $trans->email)->first();
			if($fetchProf){
				$trans->name = $fetchProf->name;
				$trans->mobile_no = $fetchProf->mobile_no;
				$trans->univ_name = $fetchProf->univ_name;
				$trans->univ_roll = $fetchProf->univ_roll;
				$trans->univ_year = $fetchProf->univ_year;
				$trans->save();
				echo 'success, ';
			}	
		
	}

	
	}


	
}