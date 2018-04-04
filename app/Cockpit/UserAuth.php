<?php

namespace App\Cockpit;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class UserAuth extends Moloquent
{
    protected $connection = 'mongodb_ecell';

    protected $collection = 'userAuth';

    protected $primaryKey = 'email';

    protected $fillable = ['email', 'password', 'mobile_no', 'email_token', 'mob_token', 'pass_reset_token'];
    public $timestamps = false;
}
