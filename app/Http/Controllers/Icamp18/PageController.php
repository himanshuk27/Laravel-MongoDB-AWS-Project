<?php

namespace App\Http\Controllers\Icamp18;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Icamp18\Players as Players;
use App\Esummit18\Players as ESPlayers;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\UserAuth;
use Mail;
use App\Mail\Icamp18\EmailVerify;
use App\Icamp18\Companies as Companies;
use App\Esummit18\Transaction as ESTrans;
use Redirect;

class PageController extends Controller{

	 public function __construct()
    {
        $this->middleware('icamp.session')->except('showProfile');
      
    }

    protected function showAiesec(Request $request){

        $email = $request->session()->get('ic_token');
		$fetchPlayer = Players::where('email', $email)->first();

        return view('Icamp18.aiesec')->with('data', $fetchPlayer);

	}	

	protected function showProfile(Request $request){

		if($request->session()->has('ic_token')){
			if($request->session()->get('prof_status') == 'es')
				$fetchPlayer = ESPlayers::where('email', $request->session()->get('ic_token'))->first();
			
			else
				$fetchPlayer = Players::where('email', $request->session()->get('ic_token'))->first();


			return view('Icamp18.profile')->with('data', $fetchPlayer);			
			
		}

		else
			return redirect('/login');

	}


	protected function showPayment(Request $request){

        $email = $request->session()->get('ic_token');
		$fetchPlayer = Players::where('email', $email)->first();

		$ESTrans = ESTrans::where('email', 'LIKE', '%'.$email.'%')->first();

        return view('Icamp18.payment')->with('data', $fetchPlayer)->with('data2', $ESTrans);

	}	

	protected function showResumeUpload(Request $request){

        $email = $request->session()->get('ic_token');
		$fetchPlayer = Players::where('email', $email)->first();

        return view('Icamp18.resumeUpload')->with('data', $fetchPlayer);

	}	


	protected function showCompany(Request $request){
		$count = 1;
		$fetchPlayer = Players::where('email', $request->session()->get('ic_token'))->first();
		if($fetchPlayer->payment == true){
			$fetchCompany = Companies::where('allow', '!=', false)->get();
        return view('Icamp18.companyList')->with('data', $fetchPlayer)->with('data2', $fetchCompany)->with('count',$count);
		}
		else{
			 return view('Icamp18.roadBlock')->with('data', $fetchPlayer);
		}
		

	}

    protected function showtest2Company(Request $request){
		$count = 1;
		$fetchPlayer = Players::where('email', $request->session()->get('ic_token'))->first();
		if($fetchPlayer->payment == true){
			$fetchCompany = Companies::where('allow', '!=', false)->get();
        return view('Icamp18.test2')->with('data', $fetchPlayer)->with('data2', $fetchCompany)->with('count',$count);
		}
		else{
			 return view('Icamp18.roadBlock')->with('data', $fetchPlayer);
		}
		

	}

	protected function showCompanyApplied(Request $request){
		$email = $request->session()->get('ic_token');
		$fetchPlayer = Players::where('email', $email)->first();
		$ic_id = $fetchPlayer->ic_id;
		
		$fetchCompany = Companies::where('applied_id', 'LIKE', '%'.$ic_id.'%')->get();
        return view('Icamp18.appliedCompanies')->with('data', $fetchPlayer)->with('data2', $fetchCompany);
	}

	protected function showCompanySaved(Request $request){
		$email = $request->session()->get('ic_token');
		$fetchPlayer = Players::where('email', $email)->first();
		$ic_id = $fetchPlayer->ic_id;
		
		$fetchCompany = Companies::where('bookmark_id', 'LIKE', '%'.$ic_id.'%')->get();
        return view('Icamp18.savedCompanies')->with('data', $fetchPlayer)->with('data2', $fetchCompany);
	}	



}
