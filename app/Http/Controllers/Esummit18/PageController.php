<?php

namespace App\Http\Controllers\Esummit18;

use App\Http\Controllers\Controller;
use Request;
use Session;
use DB;
use App\Esummit18\Campus as Campus;
use App\Esummit18\UserAuth as UserAuth;
use Hash;
use App\Esummit18\Players as Players;
use App\Esummit18\Transaction as Payments;


class PageController extends Controller{

  public function __construct()
  {
   // $this->middleware('check.session')->except('showLogin', 'showLanding', 'showLoginCustom', 'showSpeakers', 'showSponsors', 'showCampus');

      $this->middleware('check.session')->only('showDashHome', 'showDashboard', 'showProfile', 'showPayment');

      //  $this->middleware('subscribed')->except('store');
  }


   protected function showDashHome(Request $request){

    $esid = Session::get('sessionId');

    $profData = Players::find($esid[0]);

    return view('Esummit18.dash_home')->with('data', $profData);

  }


  protected function showPayment(Request $request){

    $esid = Session::get('sessionId');

    $profData = DB::connection('mongodb_esummit18')->collection('players')->where('id', $esid[0])->first();

    if(isset($profData['payment']) && $profData['payment'] == true)
      return view('Esummit18.paymentSuccess')->with('data', $profData);

    else
      return view('Esummit18.paymentClose')->with('data', $profData);
  }

  protected function showForgot(Request $request, $hashEmail, $token){
     $fetchAuth = UserAuth::where('pass_reset_token', $token)->first();

        $data = array(
        'email'  => $hashEmail,
        'token'   => $token);

        if($fetchAuth){
                if(Hash::check($fetchAuth['email'], base64_decode($hashEmail))){
                    return view('Esummit18.login_reset')->with('data', $data);
                }
                else
                  return redirect()->route('es_login'); 
        }
        else{
            return redirect()->route('es_login');
        }  
  }

  protected function showLoginCustom(Request $request, $data){

  /*  $data = array(
        'url'  => $url,
        'campus_id'   => $campus_id); */
    
    return view('Esummit18.login')->with('data', $data);
  }



  protected function showCampus(Request $request){

    $esid = Session::get('sessionId');
    $campus = Campus::find($esid[0]);


    $profData = DB::connection('mongodb_esummit18')->collection('players')->where('id', $esid[0])->first();
    if($campus)
      $profData['campus'] = $campus['ref_id'];

    return view('Esummit18.campustest1')->with('data', $profData);

  }

  protected function showLanding(Request $request){

    return view('Esummit18.landing');

  }

  protected function showLogin(Request $request){

    return view('Esummit18.login');

  }

  protected function showSponsors(Request $request)
  {
    return view("Esummit18.sponsors");
  }

  protected function showFaq(Request $request)
  {
    return view("Esummit18.faq");
  }



  protected function showDashboard(Request $request){

    $esid = Session::get('sessionId');

    $profData = DB::connection('mongodb_esummit18')->collection('players')->where('id', $esid[0])->first();

    return view('Esummit18.dash_home')->with('data', $profData);

  }

  protected function showProfile(Request $request){

    $esid = Session::get('sessionId');

    $profData = DB::connection('mongodb_esummit18')->collection('players')->where('id', $esid[0])->first();    

    return view('Esummit18.profile')->with('data', $profData);

  }

  protected function showSpeakers(Request $request){

    return view('Esummit18.speakers');

  }

  protected function showLeaderBoard(Request $request){

   $Campus = Campus::all();
    $array = [];
    $countArray = [];
    foreach ($Campus as $fetch) {
      $user = Players::where('id', $fetch->es_id)->first();
      $array += [$user['name'] =>$fetch->ref_id];
    }

    foreach ($array as $key => $value) {
      $fetchUsers = Players::where('ref_id', $value)->where('payment', true)->count();
      if($fetchUsers > 0){         
         $countArray += [$key => $fetchUsers];
      }
     

    }
        
        return view("Esummit18.leaderBoard")->with('countArray', $countArray); 
  }


  protected function showLeaderBoardOld(Request $request)
  {

         $Players = Players::all();
         $Campus = Campus::all();
        // $datas = array();
        // $counts = array();

        // foreach($Campus as $campus)
        // {
        //   foreach($Players as $player) {
            
        //     if($campus->es_id == $player->id)
        //     {
        //       array_push($datas,$player->name);
        //       break;
        //     }
        //   }
        // }

        //  foreach($Campus as $campus)
        // {
        //   $count = 0;
        //   foreach($Players as $player) {
            
        //     if($campus->ref_id == $player->ref_id)
        //     {
        //       $count++;
        //     }
        //   }
        //   array_push($counts,$count);
        // }

        // if(sizeof($datas) != sizeof($counts))
        //   echo sizeof($datas)." ".sizeof($counts);
        // foreach($counts as $count)
        //   echo $count."<br>";

      //  $merged = array_combine($datas,$counts);



    $countArray = [];

    foreach($Campus as $campus)
    {
        $count = 0;
        $fetchUsers = Players::find($campus->es_id);
        $countArray = [];
      
        if($fetchUsers)
        {
            //echo $fetchUsers->name;

          foreach($Players as $player)
          {
            if(isset($player->ref_id)  && $player->payment == true){

             $count ++;
             $countArray += [$player->name =>$count];

            }
                       
          }
          

          //echo $count."<br>";
          
            
        }



   }  

   arsort($countArray);

    // foreach ($countArray as $key => $value) {
    //    echo $key." ". $value."<br>";
    // }



        
        return view("Esummit18.leaderBoard",compact('countArray'));
  }




}


