<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userList extends Model
{
      protected $table = 'students';
	protected $primaryKey = 'studentId';
	
    public $timestamps = false;
}
