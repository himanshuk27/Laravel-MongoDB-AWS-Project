<?php

namespace App\Cockpit;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class TrackBus2 extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'player_business_2';

	protected $primaryKey = 'es_id';

	public $timestamps = true;

	protected $fillable = ['es_id', 'email','track', 'name', 'mobile_no'];
}
