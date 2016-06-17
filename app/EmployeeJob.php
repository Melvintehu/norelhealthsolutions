<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeJob extends Model
{


	public function jobs(){
		return $this->hasMany('App\Job');
	}

	public function employees(){
		return $this->hasMany('App\Employee');
	}


}
