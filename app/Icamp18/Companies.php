<?php

namespace App\Icamp18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Companies extends Moloquent {

	protected $connection = 'mongodb_icamp18';

	protected $collection = 'companies';

	protected $primaryKey = 'ic_id';

	public $timestamps = true;

	protected $fillable = [
    "ic_id", 
    "CompanyName",			
    "CompanyEmail",
    "CompanyPoc",
    "CompanyNumber",
    "CompanyAbout",
    "logo",    
    "IntStipend",
    "IntProfile",
    "IntDuration",
    "IntLocation",
    "IntNumber",
    "IntPpo",
    "IntBatch",
    "IntBranch",
    "applied_id",
    "bookmark_id",
    "allow"];
  }
