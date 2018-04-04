<?php

namespace App\Esummit18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Players extends Moloquent {

	protected $connection = 'mongodb_esummit18';

	protected $collection = 'players';

	protected $primaryKey = 'id';

	public $timestamps = true;

	protected $fillable = ['id', 'name', 'email', 'mobile_no', 'smobile', 'address' , 'city', 'state', 'country', 'pincode', 'univ_name', 'univ_roll', 'univ_year', 'univ_branch', 'prof_status', 'prof_type', 'email_status', 'job_name', 'job_pos', 'start_name', 'start_tin', 'start_addr', 'start_pop', 'start_about', 'start_prod', 'trackInit_status', 'track', 'ref_id', 'payment'];
}
