<?php

namespace App\Http\Controllers\Cockpit;

use App\Http\Controllers\Controller;
use App\Cockpit\UserAuth as UserAuth;
use App\Icamp18\Players as Players;
use App\Icamp18\Transaction as Transaction;
use Hash;
use Illuminate\Http\Request;
use Session;
use App\Cockpit\CashTrans as CashTrans;
use Mail;
use App\Mail\Icamp18\PaymentConfirmation;
use App\Icamp18\Companies as Companies;

class MainController extends Controller{

    public function __construct()
    {
        $this->middleware('cockpit.session');
    }

    protected function getLogo1(){

        return response()->file(public_path() . '/KIITEcell/logo/logosmall.png');

    }

    
    protected function cashPayIcInit(Request $request){

        if($request->session()->has('cash_ic_id')){

            try {

               $ic_id = $request->session()->get('cash_ic_id');

               $Player= Players::find($ic_id);

               if($Player->payment == true ){
                $result = array( 'type' => 'error', 'message'=> 'Payment already done!' );
               }
               else{



                    $amount = $request->input('amount');           


               $Transaction = new Transaction;

               $id = $request->input('t_id');

               $Transaction->t_id = $id;

               $Transaction->email = $Player->email;
               $Transaction->ic_id = $Player->ic_id;
               $Transaction->amount = $amount;
               $Transaction->purpose = 'IC18_Cash';
               $Transaction->oc_email = $request->session()->get('login_token');
               $Transaction->save();
               $Player->payment = true;    
               $Player->save();


               $request->session()->forget('cash_ic_id');

               $emailData = array( 'ic_id'  => $Player->ic_id);

         Mail::to($Player->email)->send(new PaymentConfirmation($emailData));

               $result = array("message"=>"Payment Successfull!", "Order Id"=> $id, "Amount" => $amount, "email" => $Player->email);
               }


               

           } catch (Exception $e) {
            $result = array( 'type' => 'error', 'message'=> $e->getMessage() );
        }  

        echo json_encode($result);

    }

    else{
        echo "Unauthorized Request! You can click it once only!";
    }





}



protected function searchReg(Request $request)
{
   return view("Cockpit.searchReg");
}

protected function fetchSearchResult(Request $request)
{
   try
   {
    $email = $request->input('userEmail');
    $player = Players::where('email',$email)->first();
   


    if($player)
    {
     if($player->payment == true)
     {
       $comp = Companies::where('applied_id', 'LIKE', '%'.$player->ic_id.'%')->get();
      if($comp){
        $array = [];
        foreach ($comp as $key) {
          array_push($array, $key->CompanyName);
        }

        $result = array("type"=>"success","msg"=>"cool","Name"=>$player->name,"Contact"=>$player->mobile_no,"Roll"=>$player->univ_roll,"Email"=>$player->email,"Status"=>$player->payment, 'Companies' => $array);
      }

      else{
         $result = array("type"=>"success","msg"=>"cool","Name"=>$player->name,"Contact"=>$player->mobile_no,"Roll"=>$player->univ_roll,"Email"=>$player->email,"Status"=>$player->payment);
      }

         
     }

     else
     {
         $result = array("type"=>"success","msg"=>"cool","Name"=>$player->name,"Contact"=>$player->mobile_no,"Roll"=>$player->univ_roll,"Email"=>$player->email,"Status"=>"False");
         Session::put('cash_ic_id', $player->ic_id);  
     }
 }
 else
   $result = array("type"=>"error");



}

catch(\Exception $e)
{
  $result = array("type"=>"error");
}

echo json_encode($result);



}
}