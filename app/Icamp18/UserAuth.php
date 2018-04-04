<?php

namespace App\Icamp18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class UserAuth extends Moloquent
{
    protected $connection = 'mongodb_icamp18';

    protected $collection = 'userAuth';
    protected $primaryKey = 'email';

    protected $fillable = ['email', 'password', 'mobile_no', 'email_token', 'mob_token', 'pass_reset_token', 'email_status', 'type'];
    public $timestamps = true;
}
