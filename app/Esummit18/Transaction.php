<?php

namespace App\Esummit18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Transaction extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'trans_es18';

	protected $primaryKey = 't_id';

	public $timestamps = true;

	protected $fillable = ['t_id', 'o_id', 'amount', 'buyer_name', 'email', 'phone', 'es_id', 'status', 'pay_id', 'pay_req_id', 'type', 'fee', 'oc_email'];
}
