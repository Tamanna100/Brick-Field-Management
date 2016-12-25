<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

	public $timestamps = false;
	protected $table = 'jobs';
    public function employees()
    {
    	$this->hasMany('App\Employee');
    }
}
