<?php

namespace App\Http\Controllers\Cockpit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Cockpit\Members as Members;
use App\Icamp18\Players as Players;
use App\Esummit18\Esummit_ID as Esummit_ID;
use App\Icamp18\Companies as Companies;

class PageController extends Controller{

	public function __construct()
	{
		$this->middleware('cockpit.session');
	}

   protected function showIcampProf(Request $request)
    {

      $ic_id = $request->input('ic_id');

      $fetchProf = Players::where('ic_id', $ic_id)->first();

      if($fetchProf){

        return view("Cockpit.icampProf")->with('data', $fetchProf);
      }
      else
        echo 'User not Found!';
    }



     protected function showCashPay(Request $request)
    {
        return view("Cockpit.cashpay");
    }

    protected function showGenerateID(Request $request)
    {
        return view("Cockpit.generateID");
    }

    protected function showLanding(Request $request){

    	$email = Session::get('login_token');

    	$Member = Members::where('email', $email)->first();

    	if($Member){
    		return view('Cockpit.landing')->with('member', $Member);
    	}

    	else
    		return redirect('/logout');

    }

    protected function showEmail(Request $request){
        $email = Session::get('login_token');
      $Member = Members::where('email', $email)->first();

       return view('Cockpit.email_promo')->with('member', $Member);
    }

    protected function showCompCount(Request $request){
$email = Session::get('login_token');
      $Member = Members::where('email', $email)->first();
     $fetchCompany = Companies::all();
      
     return view('Cockpit.icampDash')->with('member', $Member)->with('data', $fetchCompany)->with('count', 0);

    }

    protected function genID(Request $request){

        $track = $request->input('track');
        $email = $request->input('email');

        $player = Players::where('email', $email)->first();

        $Esummit_ID = new Esummit_ID;
        $Esummit_ID->es_id = $player->id;
        $Esummit_ID->email = $email;
        $Esummit_ID->track = $track;
        $Esummit_ID->name = $player->name;
        $Esummit_ID->save();

        $player->track = $track;
        $player->save();


        $result = array( 'type' => 'success', 'message'=> $email );


         echo json_encode($result);

    }

     protected function fetchGenerateID(Request $request)
  {
   

      try
      {


            

            if($request->input('es_id')){
              $es_id = $request->input('es_id');
               $player = Players::find($es_id);
            }
            else{
                 $email = $request->input('userEmail');
                $player = Players::where('email', $email)->first();
                
            }

        

        if($player)
        {
          if( isset($player->payment) && $player->payment == true )
          {

            if(isset($player->track)){

               $result = array("type"=>"success","msg"=>"Search Successful","Name"=>$player->name,"Track"=>$player->track,"ES_ID"=>$player->id,"Email"=>$player->email,"Status"=>"Paid");
           }

             else{

               $result = array("type"=>"success","msg"=>"Search Successful","Name"=>$player->name,"Track"=>"Not selected","ES_ID"=>$player->id,"Email"=>$player->email,"Status"=>"Paid");
           }
               

                
          }

          else
          {
            $result = array("type"=>"error","msg"=>"Search Successful","Name"=>$player->name,"Track"=>"Not selected","ES_ID"=>$player->id,"Email"=>$player->email,"Status"=>"Not Paid");
               
          }

               
        }
            else
              $result = array("type"=>"error1","msg"=>"Search Unsuccessful");

            
        
      }

      catch(\Exception $e)
      {
        $result = array("type"=>"Critical Error","msg"=>"Search Unsuccessful");
      }

      echo json_encode($result);

    
  }

 //    protected function showGenerateID(Request $request)
 //  {
 //    return view("generateID");
 // }
}