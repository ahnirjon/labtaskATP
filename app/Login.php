<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //protected $table = 'my_flights';
	protected $primaryKey = 'logid';
	
    public $timestamps = false;
}
