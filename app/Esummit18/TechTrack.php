<?php

namespace App\Esummit18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class TechTrack extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'track_tech';

	protected $primaryKey = 'es_id';

	public $timestamps = true;

	protected $fillable = ['es_id', 'why'];
}
