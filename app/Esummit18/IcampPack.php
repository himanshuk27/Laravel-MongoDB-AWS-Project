<?php

namespace App\Esummit18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class IcampPack extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'icamp_pay';

	protected $primaryKey = 'es_id';

	public $timestamps = true;

	protected $fillable = ['es_id', 'email'];
}
