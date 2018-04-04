<?php

namespace App\Helper;

use App\Esummit18\Players as Players;
use App\Esummit18\Transaction as Transaction;

class SendPayConfMail {	

	public static function sortEmailArray(){

		$emailArray = [];
		
		$Trans = Transaction::all();

		$UserTrans = new Transaction;

		foreach ($Trans as $UserTrans) {
			if($UserTrans->status == 'Credit'){
				$emailArray += $UserTrans->email;
			}
		}

		return $emailArray;
	}
}