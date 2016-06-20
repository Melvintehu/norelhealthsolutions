<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EpdPatient extends Eloquent {

    protected $connection = 'mongodb';

    protected $fillable = [
    	'id'

    ];

    public function visitations() {
    	return $this->hasMany('App\EpdPatientVisit');
    }

}
