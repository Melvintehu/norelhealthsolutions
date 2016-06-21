<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientVisit extends Model
{
	protected $fillable = ['description', 'date_arrival', 'date_discharged', 'emergency', 'patient_id'];
	
	public function patient() {
    	return $this->belongsTo('App\Patient');
    }

    public function employees() {
    	return $this->hasMany('App\PatientVisitEmployee');
    }
}
