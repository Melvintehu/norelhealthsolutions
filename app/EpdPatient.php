<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EpdPatient extends Eloquent {

    protected $connection = 'mongodb';

    protected $fillable = [
    	'document_number',
    	'first_name',
    	'last_name',
    	'telephone_number',
    	'date_of_birth',
    	'weight', 
    	'medicine'

    ];


    public function medicines(){
    	return $this->hasMany('App\EpdMedicine');
    }

}
