<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	
	public function department(){
		return $this->belongsTo('App\Department');
	}

	public function jobs()
	{
		return $this->belongsToMany('App\Job')
					->withPivot('date_start')
					->withPivot('date_end')
					->withTimeStamps();
	}

}
