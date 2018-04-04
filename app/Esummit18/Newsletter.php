<?php

namespace App\Esummit18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Newsletter extends Moloquent
{
    protected $connection = 'mongodb_esummit18';

    protected $collection = 'newsletter_subs';

    protected $fillable = ['email', 'id'];
    public $timestamps = false;
}
