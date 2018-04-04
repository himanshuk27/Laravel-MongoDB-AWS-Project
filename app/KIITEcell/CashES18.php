<?php

namespace App\KIITEcell;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class CashES18 extends Moloquent
{
    protected $connection = 'mongodb_ecell';

    protected $collection = 'cash_es18';
    protected $primaryKey = 'email';

    protected $fillable = ['email', 't_id', 'name', 'mobile_no', 'univ_name', 'univ_roll', 'univ_year'];
    public $timestamps = false;
}
