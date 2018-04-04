<?php

namespace App\Esummit18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class BusinessTrack extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'track_business';

	protected $primaryKey = 'es_id';

	public $timestamps = true;

	protected $fillable = ['es_id', 'why'];
}
