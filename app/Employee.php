<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	
	protected $fillable = [
		'department_id',
		'first_name',
		'last_name',
		'emailadres'
	];

	public function department(){
		return $this->belongsTo('App\Department');
	}

	public function user(){
		return $this->hasOne('App\User', 'id', 'user_id');
	}

	public function jobs()
	{
		return $this->belongsToMany('App\Job')
					->withPivot('date_start', 'date_end')
					->withTimeStamps();
	}

}
