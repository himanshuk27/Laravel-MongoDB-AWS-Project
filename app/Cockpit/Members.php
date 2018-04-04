<?php

namespace App\Cockpit;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Members extends Moloquent {

	protected $connection = 'mongodb_ecell';

	protected $collection = 'members';

	protected $primaryKey = 'id';

	public $timestamps = true;

	protected $fillable = ['id', 'name', 'email', 'phone', 'room_no', 'address' , 'phone_alt', 'dept', 'post', 'hostel', 'fb_link', 'fb_id', 'linkedin', 'twitter', 'year', 'role'];
}
