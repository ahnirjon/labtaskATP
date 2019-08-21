<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //protected $table = 'my_flights';
	protected $primaryKey = 'courseId';
	
    public $timestamps = false;
}
