<?php

namespace App\Cockpit;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class CashTrans extends Moloquent
{
    protected $connection = 'mongodb_esummit18';

	protected $collection = 'trans_cash_es18';

	protected $primaryKey = 't_id';

	public $timestamps = true;

	protected $fillable = ['t_id', 'amount', 'email', 'es_id', 'purpose', 'oc_email'];
}
