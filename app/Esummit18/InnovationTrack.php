<?php

namespace App\Esummit18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class InnovationTrack extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'track_innovation';

	protected $primaryKey = 'es_id';

	public $timestamps = true;

	protected $fillable = ['es_id', 'prototype', 'idea', 'tech_used', 'usp', 'category', 'status', 'required_fund', 'no_team', 'required_time'];
}
