<?php

namespace App\KIITEcell;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Newbies extends Moloquent {

	protected $connection = 'mongodb_ecell';

	protected $collection = 'recruitment_02.18';

	protected $primaryKey = 'id';

	public $timestamps = true;

	protected $fillable = ['id', 'name', 'email', 'roll_no', 'branch', 'year', 'time_slot', 'team', 'message_team', 'message_main', 'message_3'];
}
