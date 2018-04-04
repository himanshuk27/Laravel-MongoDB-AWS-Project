<?php

namespace App\KIITEcell;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Newsletter extends Moloquent
{
    protected $connection = 'mongodb_ecell';

    protected $collection = 'newsletter_subs';

    protected $fillable = ['Email', 'Id'];
    public $timestamps = false;
}
