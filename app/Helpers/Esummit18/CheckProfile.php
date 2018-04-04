<?php

namespace App\Helpers\Esummit18;

use DB;
use App\Icamp18\Players as Players;
use App\Esummit18\Campus as Campus;
use App\Icamp18\Transaction as Transaction;
use App\Esummit18\Transaction as ESTrans;
use Session;
use Carbon\Carbon;

class CheckProfile {


	public static function setESPay($email){



		$newPlayer = Players::where('email', $email)->first();

		if($newPlayer){
			$Transaction = Transaction::where([
			['email', 'LIKE', '%'.$email.'%'],
			['status', 'Credit']
		])->first();

		$Transaction2 = Transaction::where([
			['email', 'LIKE', '%'.$email.'%'],
			['purpose', 'IC18_Cash']
		])->first();

		if($Transaction){
			$newPlayer->payment_amount = $Transaction->amount;
			$newPlayer->payment = true;
			$newPlayer->save();
		}

		elseif ($Transaction2) {
			$newPlayer->payment_amount = $Transaction2->amount;
			$newPlayer->payment = true;
			$newPlayer->save();
		}

		else{



			$fetchTrans = ESTrans::where([
				['email', 'LIKE', '%'.$email.'%'],
				['amount', 999],
				['status', 'Credit']
			])->first();

			$fetchTrans2 = ESTrans::where([
				['email', 'LIKE', '%'.$email.'%'],
				['amount', '999'],
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
				$newPlayer->save();
			}

			elseif ($fetchTrans2) {
				$newPlayer->payment = true;
				$newPlayer->payment_amount = $fetchTrans2->amount;
				$newPlayer->save();
			}

			elseif ($fetchTrans3) {
				$newPlayer->payment = false;
				$newPlayer->payment_amount = $fetchTrans3->amount;
				$newPlayer->save();
			}

			elseif ($fetchTrans4) {
				$newPlayer->payment = false;
				$newPlayer->payment_amount = $fetchTrans4->amount;
				$newPlayer->save();
			}

			elseif ($fetchTrans5) {
				$newPlayer->payment = true;
				$newPlayer->payment_amount = $fetchTrans5->amount;
				$newPlayer->save();
			}

			else{
				return;
			}



		}
		}

		else{
			
		}


		

		
	}


	/*

public static function sortEmailArray(){

		$emailArray = [];
		
		$Trans = Transaction::all();

		$count = 0;
		$count2= 0;

		foreach ($Trans as $UserTrans) {
			
			if($UserTrans->status == 'Credit'){
				$count++;
				$email = explode(',', $UserTrans->email);
				$count2 += sizeof($email);
				//$array = array($UserTrans->es_id => $email, $UserTrans->t_id => $count2);
				foreach ($email as $value) {
					array_push($emailArray, $value);
				}			
				
			}
		}

		return $emailArray;
	}	

	public static function id($es_id){
		$Players = Players::find($es_id);
		$allow = true;
		$prof_type;

		if($Players->prof_status == true){

			switch($Players->prof_type){
				case 'Student': 
				$prof_type = array('univ_name', 'univ_roll', 'univ_year', 'univ_branch');
				break;
				case 'School Student':
				$prof_type = array('univ_name', 'univ_roll');
				break;
				case 'Professional (Job)':
				$prof_type = array('job_name', 'job_pos');
				break;	
				case 'Startup':
				$prof_type = array('start_name', 'start_addr', 'start_pop', 'start_about', 'start_prod');
				break;

				default:
				break;
			}

			$array = array('name', 'mobile_no', 'address' , 'city', 'state', 'country', 'pincode', 'prof_type');
			
			$prof = array_merge($array,$prof_type);

			foreach ($prof as $field) {
				if (empty($Players->$field)) {
					return false;
				}				
			}
		}

		else{
			$allow = false;
		}	
		

		return $allow;

	}


	public static function checkRefId($ref_id){
		$Campus = Campus::where('ref_id', $ref_id)->first();

		if($Campus)
			return true;
		else
			return false;		
	}

	*/
}