<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model


{
	public $timestamps = false;

	protected $table = 'departments';
    public function employees()
    {
    	return $this->hasMany('App\Employee');
    }
}
