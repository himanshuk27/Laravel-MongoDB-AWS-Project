<?php

namespace App\Icamp18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Players extends Moloquent {

	protected $connection = 'mongodb_icamp18';

	protected $collection = 'players';

	protected $primaryKey = 'ic_id';

	public $timestamps = true;

	protected $fillable = ['ic_id', 'name', 'email', 'mobile_no', 'smobile', 'univ_name', 'univ_roll', 'univ_year', 'univ_branch', 'ref_id', 'payment', 'payment_amount', 'selected_comp', 'saved_comp', 'resume', 'undo_exp'];
}
