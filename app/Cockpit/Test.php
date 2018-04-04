<?php

namespace App\Cockpit;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Test extends Moloquent
{
    protected $connection = 'mongodb_ecell';

    protected $collection = 'demoTest';

    protected $fillable = ['email', 'id'];
    public $timestamps = false;
}
