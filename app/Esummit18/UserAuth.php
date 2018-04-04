<?php

namespace App\Esummit18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class UserAuth extends Moloquent
{
    protected $connection = 'mongodb_esummit18';

    protected $collection = 'userAuth';

    protected $fillable = ['email', 'password', 'mobile_no', 'email_token', 'mob_token', 'pass_reset_token'];
    public $timestamps = false;
}
