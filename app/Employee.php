<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	
	protected $fillable = [
		'first_name',
		'last_name',
		'department_id'
	];

	public function department(){
		return $this->belongsTo('App\Department');
	}

	public function jobs()
	{
		return $this->belongsToMany('App\Job')
					->withPivot('date_start', 'date_end')
					->withTimeStamps();
	}

	public function patientVisits() {
		return $this->belongsToMany('App\PatientVisit')
					->withPivot('date_start')
					->withPivot('date_end')
					->withTimeStamps();
	}

}
