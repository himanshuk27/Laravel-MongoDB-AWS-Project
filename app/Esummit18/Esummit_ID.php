<?php

namespace App\Esummit18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Esummit_ID extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'esummit_id';

	protected $primaryKey = 'es_id';

	public $timestamps = true;

	protected $fillable = ['es_id', 'email','track', 'name', 'mobile_no'];
}
