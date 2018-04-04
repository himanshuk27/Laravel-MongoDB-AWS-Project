<?php

namespace App\Http\Controllers\Cockpit;

use App\Http\Controllers\Controller;
use App\Cockpit\UserAuth as UserAuth;
use App\Cockpit\Members as Members;
use Hash;
use Illuminate\Http\Request;
use Session;
use Redirect;

class AuthController extends Controller{

	protected function logout(Request $request){
		Session::flush();
		return redirect('/login');
	}


	protected function login_init(Request $request){

		$email = $request->input('userEmail');
		$pass = $request->input('userPass');
		try {
			$Member = Members::where('email', $email)->first();
			$UserAuth = UserAuth::where('email', $email)->first();

			if($Member && $UserAuth){
				if(Hash::check($pass, $UserAuth->password)){
					Session::forget('login_token');
					Session::put('login_token', $email);
					$result = array( 'type' => 'success', 'message'=> 'Login Successful!' );
				}

				else
					$result = array( 'type' => 'error', 'message'=> 'Incorrect Password!' );
			}

			else{
				$result = array( 'type' => 'error', 'message'=> 'Incorrect Email!' );
			}


		} 

		catch (Exception $e) {
			$result = array( 'type' => 'error', 'message'=> $e->getMessage() );
		}

		echo json_encode($result); 
	}

	protected function reg(Request $request){

		$Member = Members::where('email', $request->input('email'))->first();
		$UserAuth = UserAuth::where('email', $request->input('email'))->first();

		if($Member){
			if($UserAuth)
				echo 'already exists!';
			else{
				$UserAuth = new UserAuth;
				$UserAuth->email = $request->input('email');
				$UserAuth->password = Hash::make($request->input('password'));
				$UserAuth->save();

				echo 'success';
			}

		}

		else{

			$a = str_replace('o', 'X', str_random(5));
			$b = str_replace('O', 'X', $a);
			$c = str_replace('0', 'X', $b);

			$id = 'KIITECELL_'.strtoupper($c);


			$Member = new Members;
			$Member->id = $id;
			$Member->email = $request->input('email');
			$Member->name = $request->input('name');
			$Member->save();

			$UserAuth = new UserAuth;
			$UserAuth->email = $request->input('email');
			$UserAuth->password = Hash::make($request->input('password'));
			$UserAuth->save();

			echo 'success';

		}




	}
}