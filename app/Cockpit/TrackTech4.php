<?php

namespace App\Cockpit;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class TrackTech4 extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'player_tech_4';

	protected $primaryKey = 'es_id';

	public $timestamps = true;

	protected $fillable = ['es_id', 'email','track', 'name', 'mobile_no'];
}
