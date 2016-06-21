<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EpdMedicalProcedure extends Eloquent
{
    	protected $connection = 'mongodb';

    protected $fillable = [
    	'date',
    	'name',
    	'description',
    	'document_number',
    ];

}
