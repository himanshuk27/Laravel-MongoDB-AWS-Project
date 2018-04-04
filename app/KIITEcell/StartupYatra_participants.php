<?php

namespace App\KIITEcell;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class StartupYatra_participants extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'StartupYatra_participants';

	//protected $primaryKey = 'id';

	public $timestamps = true;

    protected $fillable = ['name','email','college','mobile'];

     

    
}
