<?php

namespace App\Http\Controllers\Esummit18;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Esummit18\Players as Players;
use Hash;
use CheckProfile;
use Instamojo;
use App\Esummit18\Transaction as Transaction;
use App\Esummit18\IcampPack as IcampPack;
use App\Mail\Esummit18\PaymentConfirmation;
use Mail;

class PaymentController extends Controller{

	public function __construct()
	{


	//	$this->middleware('check.session');

	}

	public function sweep(Request $request){


}

/*

protected function mkvPackInit(Request $request){

	if ($request->session()->exists('paymentMkv')) {
		$amount = Session::get('paymentMkv');
		$amount = end($amount);
		$esid = Session::get('sessionId');
		$fetchProf = Players::find($esid[0]);
		
		$Transaction = new Transaction;
		$t_id = bin2hex(random_bytes(8));
		$o_id = str_random(6);
		$Transaction->t_id = $t_id;
		$Transaction->o_id = $o_id;
		$Transaction->amount = $amount;
		$Transaction->buyer_name = $fetchProf['name'];
		$Transaction->email = $fetchProf['email'];
		$Transaction->phone = $fetchProf['mobile_no'];
		$Transaction->es_id = $esid[0];
		$Transaction->status = "init";
		

		$parameters = [

			'tid' => $t_id,

			'order_id' => $o_id,

			'amount' => $amount,
			'purpose' => 'ES18-MKV-'.$t_id,
			'buyer_name' => $fetchProf['name'],
			'email' => $fetchProf['email'],
			'phone' => $fetchProf['mobile_no'],
			'send_email' => true,
			'send_sms' => true,
			'webhook' => 'https://esummit.org.in/payment/check'
		];

		$order = Instamojo::prepare($parameters);

		$Transaction->save();

		return Instamojo::process($order);

	} 
	
	else{
		return redirect('/payment');
	}


}

protected function paymentMkv(Request $request){
	$esid = Session::get('sessionId');
	$allow = CheckProfile::id($esid[0]);
	$fetchProf = Players::find($esid[0]);
	$amount = 359;
	if($allow == false){
		$result = array( 'type' => 'error', 'message'=> "Profile Incomplete! Please update your profile.");
	}
	else{
			$request->session()->push('paymentMkv', $amount);
			$result = array( 'type' => 'success', 'message'=> 'Proceed to payment', 'cart_total' => $amount);		

	} 

	echo json_encode($result);  
}

protected function icampPackInit(Request $request){

	if ($request->session()->exists('paymentIcamp')) {
		$amount = Session::get('paymentIcamp');
		$amount = end($amount);
		$esid = Session::get('sessionId');
		$fetchProf = Players::find($esid[0]);
		
		$Transaction = new Transaction;
		$t_id = bin2hex(random_bytes(8));
		$o_id = str_random(6);
		$Transaction->t_id = $t_id;
		$Transaction->o_id = $o_id;
		$Transaction->amount = $amount;
		$Transaction->buyer_name = $fetchProf['name'];
		$Transaction->email = $fetchProf['email'];
		$Transaction->phone = $fetchProf['mobile_no'];
		$Transaction->es_id = $esid[0];
		$Transaction->status = "init";
		

		$parameters = [

			'tid' => $t_id,

			'order_id' => $o_id,

			'amount' => $amount,
			'purpose' => 'ES18-IC18-'.$t_id,
			'buyer_name' => $fetchProf['name'],
			'email' => $fetchProf['email'],
			'phone' => $fetchProf['mobile_no'],
			'send_email' => true,
			'send_sms' => true,
			'webhook' => 'https://esummit.org.in/payment/check'
		];

		$order = Instamojo::prepare($parameters);

		$Transaction->save();
		$IcampPack = new IcampPack;
		$IcampPack->es_id = $esid[0];
		$IcampPack->email = $fetchProf['email'];
		$IcampPack->save();

		return Instamojo::process($order);

	} 
	
	else{
		return redirect('/payment');
	}


}

protected function paymentIcamp(Request $request){
	$esid = Session::get('sessionId');
	$allow = CheckProfile::id($esid[0]);
	$fetchProf = Players::find($esid[0]);
	if($allow == false){
		$result = array( 'type' => 'error', 'message'=> "Profile Incomplete! Please update your profile.");
	}
	else{

		if($fetchProf['prof_type'] == 'Student'){
			if($fetchProf['univ_name'] == 'kiit')
				$amount = 999;
			else
				$amount = 1499;

			$request->session()->push('paymentIcamp', $amount);
			$result = array( 'type' => 'success', 'message'=> 'Proceed to payment', 'cart_total' => $amount);
		}

		else if($fetchProf['prof_type'] == 'School Student')
			$result = array( 'type' => 'error', 'message'=> "You are not eligible for this action!");

		else if($fetchProf['prof_type'] == 'Professional (Job)')
			$result = array( 'type' => 'error', 'message'=> "You are not eligible for this action!");

		else if($fetchProf['prof_type'] == 'Startup') 
			$result = array( 'type' => 'error', 'message'=> "You are not eligible for this action!");		

	} 

	echo json_encode($result);  
}

protected function transListPull(Request $request){
	$esid = Session::get('sessionId');
	$esid = $esid[0];
	$result = [];

	$trans = Transaction::all();

	foreach ($trans as $payment) {
		$result += array( $payment->es_id => $payment->es_id, 'message'=> 'Payment Successful!' );
	}

	echo json_encode($result);
	
}

protected function transList(Request $request){
	return view('Esummit18.paymentlist');
}

protected function payStartup(Request $request){

	$esid = Session::get('sessionId');
	$profile = Players::find($esid[0]);

	try{
		if($profile->payment == true)
			$result = array( 'type' => 'warning', 'message'=> 'Payment already exists for this profile!' );

		else if($profile->prof_type == 'Startup'){
			$profile->payment = true;
			$profile->save();
			$result = array( 'type' => 'success', 'message'=> 'Payment Successful!' );
		}

		else
			$result = array( 'type' => 'error', 'message'=> 'Your profile type is not set as Startup' );

	}





	catch(\Exception $e){
				$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
			}

	echo json_encode($result); 	

}


protected function pay_bulk_check($email){
	$user = Players::where('email', $email)->first();

	if($user){
		if(CheckProfile::id($user['id']) == false)
			return 'User\'s profile incomplete'; 
		else{
			if($user['payment'] == true)
				return 'Payment already done!'; 
			else
				return 'success';      
		}
	}
	else
		return 'Email id not exists!';
}

protected function pay_10_start(Request $request){
	if ($request->session()->exists('payment_10')) {
		$esid = Session::get('sessionId');
		$payment_10 = Session::get('payment_10');
		$payment_10 = end($payment_10);
		$email_array = array($payment_10['email1'], $payment_10['email2'], $payment_10['email3'], $payment_10['email4'], $payment_10['email5'], $payment_10['email6'], $payment_10['email7'], $payment_10['email8'], $payment_10['email9'], $payment_10['email10']);
		$fetchProf = Players::find($esid[0]);
		$Transaction = new Transaction;
		$t_id = bin2hex(random_bytes(8));
		$o_id = str_random(6);
		$Transaction->t_id = $t_id;
		$Transaction->o_id = $o_id;		
		$Transaction->amount = $payment_10['cart_total'];
		$cart_items = [];
		foreach ($payment_10['cart_items'] as $key => $value) {			
			array_push($cart_items, $value);
		}
		$Transaction->fee = implode(',', $cart_items);
		$Transaction->buyer_name = $fetchProf['name'];
		$Transaction->email = implode(',', $email_array);
		$Transaction->phone = $fetchProf['mobile_no'];
		$Transaction->es_id = $esid[0];
		$Transaction->status = "init";
		$Transaction->type = 'bulk_10';
		

		$parameters = [

			'tid' => $t_id,

			'order_id' => $o_id,

			'amount' => $payment_10['cart_total'],
			'purpose' => 'E-Summit18-'.$t_id,
			'buyer_name' => $fetchProf['name'],
			'email' => $fetchProf['email'],
			'phone' => $fetchProf['mobile_no'],
			'send_email' => true,
			'send_sms' => true,
			'webhook' => 'https://esummit.org.in/payment/check'
		];

		$order = Instamojo::prepare($parameters);

		$Transaction->save();

		return Instamojo::process($order); 
	}

	else
		return redirect('/payment');
}

protected function pay_10_init(Request $request){
	$array = array('humanEmail_1', 'humanEmail_2', 'humanEmail_3', 'humanEmail_4', 'humanEmail_5', 'humanEmail_6',
		'humanEmail_7', 'humanEmail_8', 'humanEmail_9');
	$result = array('test' => 'dummy');
	$allow = true;
	$cart_total = array('tax' => 20);
	$esid = Session::get('sessionId');
	$prof = Players::find($esid[0]);

	foreach ($array as $field) {
		if (empty($_POST[$field])) {
			$allow = false;
		}
	}

	if($allow == false) {
		$result = array( 'type' => 'error', 'message'=> "One of the required fields is empty!");
	}

	else{

		$check = 1;

		if(CheckProfile::id($esid[0]) == true){

			$request->session()->forget('payment_10');


			if($prof['prof_type'] == 'Student'){
				if($prof['univ_name'] == 'kiit')
					$cart_total += [ "email1" => 749 ];
						else
							$cart_total += [ "email1" => 1149 ];
					}
					else if($prof['prof_type'] == 'School Student')
						$cart_total += [ "email1" => 700 ];
					else if($prof['prof_type'] == 'Professional (Job)')
						$cart_total += [ "email1" => 1149 ];
			else
				$result = array( 'type' => 'error', 'message'=> "Your Profile type is not eligible for this action");

			try{

				$user1 = $this->pay_bulk_check($request->input('humanEmail_1'));
				$user2 = $this->pay_bulk_check($request->input('humanEmail_2'));
				$user3 = $this->pay_bulk_check($request->input('humanEmail_3'));
				$user4 = $this->pay_bulk_check($request->input('humanEmail_4'));
				$user5 = $this->pay_bulk_check($request->input('humanEmail_5'));
				$user6 = $this->pay_bulk_check($request->input('humanEmail_6'));
				$user7 = $this->pay_bulk_check($request->input('humanEmail_7'));
				$user8 = $this->pay_bulk_check($request->input('humanEmail_8'));
				$user9 = $this->pay_bulk_check($request->input('humanEmail_9'));

				if($user1=='success'){
					$check = $check+1;
					$result += [ "email1" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_1'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += [ "email2" => 749 ];
						else
							$cart_total += [ "email2" => 1149 ];
					}
					else if($prof['prof_type'] == 'School Student')
						$cart_total += [ "email2" => 700 ];
					else if($prof['prof_type'] == 'Professional (Job)')
						$cart_total += [ "email2" => 1149 ];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email1" => $user1 ];

				if($user2=='success'){
					$check = $check+1;
					$result += [ "email2" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_2'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += [ "email3" => 749 ];
						else
							$cart_total += [ "email3" => 1149 ];
					}
					else if($prof['prof_type'] == 'School Student')
						$cart_total += [ "email3" => 700 ];
					else if($prof['prof_type'] == 'Professional (Job)')
						$cart_total += [ "email3" => 1149 ];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email2" => $user2 ];

				if($user3=='success'){
					$check = $check+1;
					$result += [ "email3" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_3'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += [ "email4" => 749 ];
						else
							$cart_total += [ "email4" => 1149 ];
					}
					else if($prof['prof_type'] == 'School Student')
						$cart_total += [ "email4" => 700 ];
					else if($prof['prof_type'] == 'Professional (Job)')
						$cart_total += [ "email4" => 1149 ];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email3" => $user3 ];

				if($user4=='success'){
					$check = $check+1;
					$result += [ "email4" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_4'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += [ "email5" => 749 ];
						else
							$cart_total += [ "email5" => 1149 ];
					}
					else if($prof['prof_type'] == 'School Student')
						$cart_total += [ "email5" => 700 ];
					else if($prof['prof_type'] == 'Professional (Job)')
						$cart_total += [ "email5" => 1149 ];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email4" => $user4 ];

				if($user5=='success'){
					$check = $check+1;
					$result += [ "email5" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_5'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += [ "email6" => 749 ];
						else
							$cart_total += [ "email6" => 1149 ];
					}
					else if($prof['prof_type'] == 'School Student')
						$cart_total += [ "email6" => 700 ];
					else if($prof['prof_type'] == 'Professional (Job)')
						$cart_total += [ "email6" => 1149 ];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email5" => $user5 ];

				if($user6=='success'){
					$check = $check+1;
					$result += [ "email6" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_6'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += [ "email7" => 749 ];
						else
							$cart_total += [ "email7" => 1149 ];
					}
					else if($prof['prof_type'] == 'School Student')
						$cart_total += [ "email7" => 700 ];
					else if($prof['prof_type'] == 'Professional (Job)')
						$cart_total += [ "email7" => 1149 ];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email6" => $user6 ];

				if($user7=='success'){
					$check = $check+1;
					$result += [ "email7" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_7'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += [ "email8" => 749 ];
						else
							$cart_total += [ "email8" => 1149 ];
					}
					else if($prof['prof_type'] == 'School Student')
						$cart_total += [ "email8" => 700 ];
					else if($prof['prof_type'] == 'Professional (Job)')
						$cart_total += [ "email8" => 1149 ];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email7" => $user7 ];

				if($user8=='success'){
					$check = $check+1;
					$result += [ "email8" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_8'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += [ "email9" => 749 ];
						else
							$cart_total += [ "email9" => 1149 ];
					}
					else if($prof['prof_type'] == 'School Student')
						$cart_total += [ "email9" => 700 ];
					else if($prof['prof_type'] == 'Professional (Job)')
						$cart_total += [ "email9" => 1149 ];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email8" => $user8 ];

				if($user9=='success'){
					$check = $check+1;
					$result += [ "email9" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_9'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += [ "email10" => 749 ];
						else
							$cart_total += [ "email10" => 1149 ];
					}
					else if($prof['prof_type'] == 'School Student')
						$cart_total += [ "email10" => 700 ];
					else if($prof['prof_type'] == 'Professional (Job)')
						$cart_total += [ "email10" => 1149 ];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email9" => $user9 ];

				$total_amount = 0;
				$tax = 0;

				foreach ($cart_total as $key => $value) {
					if($key == 'tax')
						$tax = $value;			

					$total_amount += $value;
				}


				if($check == 10){
					$payment_10 = array('cart_items' => $cart_total, 'cart_total' => $total_amount, 'email1' => $prof['email'],
						'email2' => $request->input('humanEmail_1'), 'email3' => $request->input('humanEmail_2'),
						'email4' => $request->input('humanEmail_3'),'email5' => $request->input('humanEmail_4'),
						'email6' => $request->input('humanEmail_5'), 'email7' => $request->input('humanEmail_6'),
						'email8' => $request->input('humanEmail_7'), 'email9' => $request->input('humanEmail_8'),
						'email10' => $request->input('humanEmail_9'));
					$request->session()->push('payment_10', $payment_10);
					$result += ['type' => 'success'];
				}
				
				$sub_total = $total_amount-$tax;
				$result += ["cart_total" => $total_amount, 'tax' => $tax, 'sub_total' => $sub_total];
			}

			catch(\Exception $e){
				$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
			}

		}
	}
	echo json_encode($result); 
}
protected function pay_5_start(Request $request){
	if ($request->session()->exists('payment_5')) {
		$esid = Session::get('sessionId');
		$payment_5 = Session::get('payment_5');
		$payment_5 = end($payment_5);
		$email_array = array($payment_5['email1'], $payment_5['email2'], $payment_5['email3'], $payment_5['email4'], $payment_5['email5']);
		$fetchProf = Players::find($esid[0]);
		$Transaction = new Transaction;
		$t_id = bin2hex(random_bytes(8));
		$o_id = str_random(6);
		$Transaction->t_id = $t_id;
		$Transaction->o_id = $o_id;
		$cart_items = [];
		foreach ($payment_5['cart_items'] as $key => $value) {			
			array_push($cart_items, $value);
		}
		$Transaction->fee = implode(',', $cart_items);
		$Transaction->amount = $payment_5['cart_total'];
		$Transaction->buyer_name = $fetchProf['name'];
		$Transaction->email = implode(',', $email_array);
		$Transaction->phone = $fetchProf['mobile_no'];
		$Transaction->es_id = $esid[0];
		$Transaction->status = "init";
		$Transaction->type = 'bulk_5';
		

		$parameters = [

			'tid' => $t_id,

			'order_id' => $o_id,

			'amount' => $payment_5['cart_total'],
			'purpose' => 'E-Summit18-'.$t_id,
			'buyer_name' => $fetchProf['name'],
			'email' => $fetchProf['email'],
			'phone' => $fetchProf['mobile_no'],
			'send_email' => true,
			'send_sms' => true,
			'webhook' => 'https://esummit.org.in/payment/check'
		];

		$order = Instamojo::prepare($parameters);

		$Transaction->save();

		return Instamojo::process($order); 
	}

	else
		return redirect('/payment');
}

protected function pay_5_init(Request $request){
	$array = array('humanEmail_1', 'humanEmail_2', 'humanEmail_3', 'humanEmail_4');
	$result = array('test' => 'dummy');
	$allow = true;
	$cart_total = array('tax' => 10);
	$esid = Session::get('sessionId');
	$prof = Players::find($esid[0]);

	foreach ($array as $field) {
		if (empty($_POST[$field])) {
			$allow = false;
		}
	}

	if($allow == false) {
		$result = array( 'type' => 'error', 'message'=> "One of the required fields is empty!");
	}
	else{

		$check = 1;

		if(CheckProfile::id($esid[0]) == true){

			$request->session()->forget('payment_5');


			if($prof['prof_type'] == 'Student'){
				if($prof['univ_name'] == 'kiit')
					$cart_total += ['email1' => 799];
				else
					$cart_total += ['email1' => 1199];
			}
			else if($prof['prof_type'] == 'School Student')
				$cart_total += ['email1' => 749];
			else if($prof['prof_type'] == 'Professional (Job)')
				$cart_total += ['email1' => 1199];
			else
				$result = array( 'type' => 'error', 'message'=> "Your Profile type is not eligible for this action");

			try{
				$user1 = $this->pay_bulk_check($request->input('humanEmail_1'));
				$user2 = $this->pay_bulk_check($request->input('humanEmail_2'));
				$user3 = $this->pay_bulk_check($request->input('humanEmail_3'));
				$user4 = $this->pay_bulk_check($request->input('humanEmail_4'));


				if($user1=='success'){
					$check = $check+1;
					$result += [ "email1" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_1'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += ['email2' => 799];
				else
					$cart_total += ['email2' => 1199];
			}
			else if($prof['prof_type'] == 'School Student')
				$cart_total += ['email2' => 749];
			else if($prof['prof_type'] == 'Professional (Job)')
				$cart_total += ['email2' => 1199];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email1" => $user1 ];

				if($user2=='success'){
					$check = $check+1;
					$result += [ "email2" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_2'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += ['email3' => 799];
				else
					$cart_total += ['email3' => 1199];
			}
			else if($prof['prof_type'] == 'School Student')
				$cart_total += ['email3' => 749];
			else if($prof['prof_type'] == 'Professional (Job)')
				$cart_total += ['email3' => 1199];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email2" => $user2 ];

				if($user3=='success'){
					$check = $check+1;
					$result += [ "email3" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_3'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += ['email4' => 799];
				else
					$cart_total += ['email4' => 1199];
			}
			else if($prof['prof_type'] == 'School Student')
				$cart_total += ['email4' => 749];
			else if($prof['prof_type'] == 'Professional (Job)')
				$cart_total += ['email4' => 1199];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email3" => $user3 ];

				if($user4=='success'){
					$check = $check+1;
					$result += [ "email4" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_4'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += ['email5' => 799];
				else
					$cart_total += ['email5' => 1199];
			}
			else if($prof['prof_type'] == 'School Student')
				$cart_total += ['email5' => 749];
			else if($prof['prof_type'] == 'Professional (Job)')
				$cart_total += ['email5' => 1199];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email4" => $user4 ];

				$total_amount = 0;
				$tax = 0;

				foreach ($cart_total as $key => $value) {
					if($key == 'tax')
						$tax = $value;			

					$total_amount += $value;
				}
				$sub_total = $total_amount-$tax;

				if($check == 5){
					$payment_5 = array('cart_items' => $cart_total, 'cart_total' => $total_amount, 'email1' => $prof['email'],
						'email2' => $request->input('humanEmail_1'), 'email3' => $request->input('humanEmail_2'),
						'email4' => $request->input('humanEmail_3'),'email5' => $request->input('humanEmail_4'));
					$request->session()->push('payment_5', $payment_5);
					$result += ['type' => 'success'];
				}
				$result += ["cart_total" => $total_amount, 'tax' => $tax, 'sub_total' => $sub_total];
			}

			catch(\Exception $e){
				$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
			} 


		}
		else
			$result = array( 'type' => 'error', 'message'=> "Incomplete Profile, please complete your profile.");

	}  

	echo json_encode($result); 
}

protected function pay_2_start(Request $request){
	if ($request->session()->exists('payment_2')) {
		$esid = Session::get('sessionId');
		$payment_2 = Session::get('payment_2');
		$payment_2 = end($payment_2);
		$email_array = array($payment_2['email1'], $payment_2['email2']);
		$fetchProf = Players::find($esid[0]);
		$Transaction = new Transaction;
		$t_id = bin2hex(random_bytes(8));
		$o_id = str_random(6);
		$Transaction->t_id = $t_id;
		$Transaction->o_id = $o_id;
		$cart_items = [];
		foreach ($payment_2['cart_items'] as $key => $value) {			
			array_push($cart_items, $value);
		}
		$Transaction->fee = implode(',', $cart_items);
		$Transaction->amount = $payment_2['cart_total'];
		$Transaction->buyer_name = $fetchProf['name'];
		$Transaction->email = implode(',', $email_array);
		$Transaction->phone = $fetchProf['mobile_no'];
		$Transaction->es_id = $esid[0];
		$Transaction->status = "init";
		$Transaction->type = 'bulk_5';
		

		$parameters = [

			'tid' => $t_id,

			'order_id' => $o_id,

			'amount' => $payment_2['cart_total'],
			'purpose' => 'E-Summit18-'.$t_id,
			'buyer_name' => $fetchProf['name'],
			'email' => $fetchProf['email'],
			'phone' => $fetchProf['mobile_no'],
			'send_email' => true,
			'send_sms' => true,
			'webhook' => 'https://esummit.org.in/payment/check'
		];

		$order = Instamojo::prepare($parameters);

		$Transaction->save();

		return Instamojo::process($order); 
	}

	else
		return redirect('/payment');
}

protected function pay_2_init(Request $request){
	$array = array('humanEmail_1');
	$result = [];
	$allow = true;
	$cart_total = array('tax' => 10);
	$esid = Session::get('sessionId');
	$prof = Players::find($esid[0]);

	foreach ($array as $field) {
		if (empty($_POST[$field])) {
			$allow = false;
		}
	}

	if($allow == false) {
		$result = array( 'type' => 'error', 'message'=> "One of the required fields is empty!");
	}
	else{

		$check = 1;

		if(CheckProfile::id($esid[0]) == true){

			$request->session()->forget('payment_2');


			if($prof['prof_type'] == 'Student'){
				if($prof['univ_name'] == 'kiit')
					$cart_total += ['email1' => 799];
				else
					$cart_total += ['email1' => 1199];
			}
			else if($prof['prof_type'] == 'School Student')
				$cart_total += ['email1' => 749];
			else if($prof['prof_type'] == 'Professional (Job)')
				$cart_total += ['email1' => 1199];
			else
				$result = array( 'type' => 'error', 'message'=> "Your Profile type is not eligible for this action");

			try{
				$user1 = $this->pay_bulk_check($request->input('humanEmail_1'));


				if($user1=='success'){
					$check = $check+1;
					$result += [ "email1" => 'checked' ];
					$fetchUser = Players::where('email', $request->input('humanEmail_1'))->first();

					if($fetchUser['prof_type'] == 'Student'){
						if($fetchUser['univ_name'] == 'kiit')
							$cart_total += ['email2' => 799];
				else
					$cart_total += ['email2' => 1199];
			}
			else if($prof['prof_type'] == 'School Student')
				$cart_total += ['email2' => 749];
			else if($prof['prof_type'] == 'Professional (Job)')
				$cart_total += ['email2' => 1199];
					else
						$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
				}
				else
					$result += [ "email1" => $user1 ];				

				$total_amount = 0;
				$tax = 0;

				foreach ($cart_total as $key => $value) {
					if($key == 'tax')
						$tax = $value;			

					$total_amount += $value;
				}
				$sub_total = $total_amount-$tax;

				if($check == 2){
					$payment_2 = array('cart_items' => $cart_total, 'cart_total' => $total_amount, 'email1' => $prof['email'],
						'email2' => $request->input('humanEmail_1'));
					$request->session()->push('payment_2', $payment_2);
					$result += ['type' => 'success'];
				}
				$result += ["cart_total" => $total_amount, 'tax' => $tax, 'sub_total' => $sub_total];
			}

			catch(\Exception $e){
				$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
			} 


		}
		else
			$result = array( 'type' => 'error', 'message'=> "Incomplete Profile, please complete your profile.");

	}  

	echo json_encode($result); 
}

protected function showPayCheck(Request $request){

	$response = Instamojo::response($request);

	$request->session()->push('insta_response', $response);

	$esid = Session::get('sessionId');

	$t_id = explode('-', $response->payment_request->purpose)[2];

	$Transaction = Transaction::find($t_id);

	if($Transaction){

		$profData = Players::find($esid[0]); 

		$Transaction->status = $response->payment_request->payment->status;
		$Transaction->pay_id = $request->input('payment_id');
		$Transaction->pay_req_id = $request->input('payment_request_id');
		$Transaction->type = 'bulk_10';
		$Transaction->save(); 
		$request->session()->forget('payment');
		$request->session()->forget('payment_5');
		$request->session()->forget('payment_10');

		$emailArray = explode(',', $Transaction->email);



		if($response->payment_request->payment->status == 'Credit'){
			foreach ($emailArray as $value) {
				$User = Players::where('email', $value)->first();
				if($User){
					$User->payment = true;
					$User->save();



				$emailData = array( 'es_id'  => $User->id);

               Mail::to($User->email)->send(new PaymentConfirmation($emailData));	




				}
					
			}
			
			return view('Esummit18.paymentSuccess')->with('data', $profData)->with('response', $response->payment_request)->with('trans', $Transaction);
		}

		else{
			return view('Esummit18.paymentFailure')->with('data', $profData)->with('response', $response->payment_request)->with('trans', $Transaction);
		}


	}

	else{
		return redirect('/payment');
	}






}

protected function paymentinit(Request $request){

	if ($request->session()->exists('payment')) {
		$amount = Session::get('payment');
		$amount = end($amount);
		$esid = Session::get('sessionId');
		$fetchProf = Players::find($esid[0]);
		
		$Transaction = new Transaction;
		$t_id = bin2hex(random_bytes(8));
		$o_id = str_random(6);
		$Transaction->t_id = $t_id;
		$Transaction->o_id = $o_id;
		$Transaction->amount = $amount;
		$Transaction->buyer_name = $fetchProf['name'];
		$Transaction->email = $fetchProf['email'];
		$Transaction->phone = $fetchProf['mobile_no'];
		$Transaction->es_id = $esid[0];
		$Transaction->status = "init";
		

		$parameters = [

			'tid' => $t_id,

			'order_id' => $o_id,

			'amount' => $amount,
			'purpose' => 'E-Summit18-'.$t_id,
			'buyer_name' => $fetchProf['name'],
			'email' => $fetchProf['email'],
			'phone' => $fetchProf['mobile_no'],
			'send_email' => true,
			'send_sms' => true,
			'webhook' => 'https://esummit.org.in/payment/check'
		];

		$order = Instamojo::prepare($parameters);

		$Transaction->save();

		return Instamojo::process($order);

	} 
	
	else{
		return redirect('/payment');
	}


}

protected function payment(Request $request){
	$esid = Session::get('sessionId');
	$allow = CheckProfile::id($esid[0]);
	$fetchProf = Players::find($esid[0]);
	if($allow == false){
		$result = array( 'type' => 'error', 'message'=> "Profile Incomplete! Please update your profile.");
	}
	else{

		if($fetchProf['prof_type'] == 'Student'){
			if($fetchProf['univ_name'] == 'kiit')
				$amount = 849;
			else
				$amount = 1249;
		}

		else if($fetchProf['prof_type'] == 'School Student')
			$amount = 799;

		else if($fetchProf['prof_type'] == 'Professional (Job)')
			$amount = 1249;

		else if($fetchProf['prof_type'] == 'Startup') 
			$amount = 3199;

		$request->session()->push('payment', $amount);
		$result = array( 'type' => 'success', 'message'=> 'Proceed to payment', 'cart_total' => $amount);

	} 

	echo json_encode($result);  
}

*/




}


