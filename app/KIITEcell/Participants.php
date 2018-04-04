<?php

namespace App\KIITEcell;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Participants extends Moloquent {

	protected $connection = 'mongodb_ecell';

	protected $collection = 'participants';

	//protected $primaryKey = 'id';

	public $timestamps = true;

    protected $fillable = [ 'TeamName', 'Theme', 'Name_mem1', 'Roll_mem1', 'Email_mem1' , 'Mobile_mem1', 
    'Name_mem2', 'Roll_mem2', 'Email_mem2', 'Mobile_mem2', 'Name_mem3', 'Roll_mem3', 'Mobile_mem3','Email_mem3', 'Name_mem4',',Roll_mem4', 'Email_mem4', 'Mobile_mem4','Name_mem5',',Roll_mem5', 'Email_mem5', 'Mobile_mem5','Address','Reason','TeamId'];

     

    
}
