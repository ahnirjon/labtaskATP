<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    //protected $table = 'my_flights';
	protected $primaryKey = 'carId';
	
    public $timestamps = false;
}
