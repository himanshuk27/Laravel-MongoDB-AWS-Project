<?php

namespace App\Icamp18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Transaction extends Moloquent {

	protected $connection = 'mongodb_icamp18';

	protected $collection = 'trans_ic18';

	protected $primaryKey = 'ic_id';

	public $timestamps = true;

	protected $fillable = ['t_id', 'o_id', 'amount', 'buyer_name', 'email', 'phone', 'ic_id', 'status', 'pay_id', 'pay_req_id', 'purpose'];
}
