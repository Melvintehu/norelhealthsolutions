<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EpdPatientVisit extends Eloquent
{
    protected $connection = 'mongodb';

    protected $fillable = ['date_arrival', 'description', 'symptoms'];

    public function patient() {
    	return $this->hasOne('App\EpdPatient');
    }

    public function employees() {
    	return $this->belongsToMany('App\Employee');
    }

}
