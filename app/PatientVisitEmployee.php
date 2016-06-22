<?php

namespace App;

use App\PatientVisit;
use Illuminate\Database\Eloquent\Model;

class PatientVisitEmployee extends Model
{
    public function visit() {
    	$this->belongsTo('App\PatientVisit');
    }

    public function employee() {
    	$this->belongsTo('App\Employee');
    }
}
