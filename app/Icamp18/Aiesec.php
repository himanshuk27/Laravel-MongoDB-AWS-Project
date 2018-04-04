<?php

namespace App\Icamp18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Aiesec extends Moloquent {

	protected $connection = 'mongodb_icamp18';

	protected $collection = 'aiesec';

	protected $primaryKey = 'email';

	public $timestamps = true;

	protected $fillable = ['ic_id', 'email'];
}
