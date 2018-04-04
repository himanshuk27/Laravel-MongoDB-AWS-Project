<?php

namespace App\Http\Controllers\Icamp18;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Instamojo;
use Mail;
use App\Icamp18\Players as Players;
use App\Icamp18\Transaction as Transaction;
use App\Mail\Icamp18\PaymentConfirmation;
use App\Esummit18\Transaction as ESTrans;
use Carbon\Carbon;

class PaymentController extends Controller{

	public function __construct()
	{


		$this->middleware('icamp.session');

	}

	public function sweep(Request $request){


	}

	protected function instaWebhook(Request $request){

		$response = Instamojo::response($request);

		$t_id = explode('-', $response->payment_request->purpose)[1];

		$Transaction = Transaction::where('t_id', $t_id)->first();

		if($Transaction){

			$check = Transaction::where([
				['email', $Transaction->email],
				['status', 'Credit']
			])->first();

			if($check){
				return;
			}

			else{

				$Transaction->status = $response->payment_request->payment->status;
			$Transaction->pay_id = $request->input('payment_id');
			$Transaction->pay_req_id = $request->input('payment_request_id');
			$Transaction->save(); 

			if($response->payment_request->payment->status == 'Credit'){

				$fetchPlayer = Players::where('email', $Transaction->email)->first();
				if($fetchPlayer){
					$fetchPlayer->payment = true;
				$fetchPlayer->save();

				$emailData = array( 'ic_id'  => $fetchPlayer->ic_id);
Mail::to($fetchPlayer->email)->send(new PaymentConfirmation($emailData));
				}
				
			}

			}

						
			
		}

		

	}

	protected function payInit(Request $request){

		$fetchPlayer = Players::where('email', $request->session()->get('ic_token'))->first();

		if ($request->session()->has('trans_amount') && $fetchPlayer) {
			$amount = $request->session()->get('trans_amount');

			

			$Transaction = new Transaction;
			$t_id = bin2hex(random_bytes(8));
			$o_id = str_random(6);
			$Transaction->t_id = $t_id;
			$Transaction->o_id = $o_id;
			$Transaction->amount = $amount;
			$Transaction->buyer_name = $fetchPlayer->name;
			$Transaction->email = $fetchPlayer->email;
			$Transaction->phone = $fetchPlayer->mobile_no;
			$Transaction->ic_id = $fetchPlayer->ic_id;
			$Transaction->status = "init";


			$parameters = [

				'tid' => $t_id,

				'order_id' => $o_id,

				'amount' => $amount,
				'purpose' => 'IC18-'.$t_id,
				'buyer_name' => $fetchPlayer->name,
				'email' => $fetchPlayer->email,
				'phone' => $fetchPlayer->mobile_no,
				'send_email' => true,
				'send_sms' => true,
				'webhook' => 'https://interncamp.org.in/payment/webhook'
			];

			$order = Instamojo::prepare($parameters);

			$Transaction->save();

			$request->session()->forget('trans_amount');


			return Instamojo::process($order);

		} 

		else{
			return redirect('/payment');
		}


	}

	protected function payCheck(Request $request){
		$email = $request->session()->get('ic_token');
		$fetchPlayer = Players::where('email', $email)->first();

		try {

			if($fetchPlayer){

				if($fetchPlayer->payment_amount == 849){

					$ESTrans = ESTrans::where([
						['email', $email],
						['status', 'Credit'],
						['created_at', '<', Carbon::parse('03/05/2018')]
					])->first();	
					if($ESTrans){
						$request->session()->put('trans_amount', 159);
					$result = array( 'type' => 'success', 'message'=> 'Proceed to payment. (Esummit Early Bird Entry)', 'cart_total' => 159);
					}	
					else{

						if($fetchPlayer->univ_name == 'kiit'){
						$request->session()->put('trans_amount', 310);
						$result = array( 'type' => 'success', 'message'=> 'Proceed to payment(Esummit Early Bird Not Eligible!)', 'cart_total' => 310);
					}

					else{
						$request->session()->put('trans_amount', 410);
						$result = array( 'type' => 'success', 'message'=> 'Proceed to payment(Esummit Early Bird Not Eligible!)', 'cart_total' => 410);
					}

					}	

									
				
					
				}

				else if($fetchPlayer->payment_amount == 999){
					$result = array( 'type' => 'error', 'message'=> "You are already eligible for Icamp.");
				}
				else{
					if($fetchPlayer->univ_name == 'kiit'){
						$request->session()->put('trans_amount', 310);
						$result = array( 'type' => 'success', 'message'=> 'Proceed to payment', 'cart_total' => 310);
					}
					else{
						$request->session()->put('trans_amount', 410);
						$result = array( 'type' => 'success', 'message'=> 'Proceed to payment', 'cart_total' => 410);
					}
				}
			}



			else{
				$result = array( 'type' => 'error', 'message'=> "Unknown Error!");
			}

		} catch (Exception $e) {
			$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
		}

		echo json_encode($result);  
	}



	protected function payFinalize(Request $request){

		$response = Instamojo::response($request);

		$fetchPlayer = Players::where('email', $request->session()->get('ic_token'))->first();

		$t_id = explode('-', $response->payment_request->purpose)[1];

		$Transaction = Transaction::where('t_id', $t_id)->first();

		if($Transaction){

			$Transaction->status = $response->payment_request->payment->status;
			$Transaction->pay_id = $request->input('payment_id');
			$Transaction->pay_req_id = $request->input('payment_request_id');
			$Transaction->save(); 

			if($response->payment_request->payment->status == 'Credit'){
				$fetchPlayer->payment = true;
				$fetchPlayer->save();
				$emailData = array( 'ic_id'  => $fetchPlayer->ic_id);

			Mail::to($fetchPlayer->email)->send(new PaymentConfirmation($emailData));
			return view('Icamp18.paymentSuccess')->with('data', $fetchPlayer)->with('response', $response->payment_request)->with('trans', $Transaction);
			}
			else{
				return view('Icamp18.paymentFailure')->with('data', $fetchPlayer)->with('response', $response->payment_request)->with('trans', $Transaction);
			}
			
		}

		else{
			return redirect('/payment');
		}

	}




}


