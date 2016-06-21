<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EpdMedicine extends Eloquent
{
    protected $connection = 'mongodb';

    protected $fillable = [
    	'date_start',
    	'date_end',
    	'name',
    	'description',
    	'dosage',
    	'patient_document_number'
    ];




    public function patient(){
    	return $this->belongsTo('App\EpdPatient');
    }

}
