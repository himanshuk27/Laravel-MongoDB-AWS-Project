<?php

namespace App\Esummit18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class CashTransaction extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'trans_cash_es18';

	protected $primaryKey = 't_id';

	public $timestamps = true;

	protected $fillable = ['t_id', 'o_id', 'amount', 'email', 'es_id', 'status', 'oc_email', 'purpose'];
}
