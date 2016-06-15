<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

   	protected $fillable = [
    	'name',
    	'tier'

    ];


    public function employees(){
		return $this->belongsToMany('App\Employee')
					->withPivot('date_start', 'date_end')
					->withTimeStamps();
    }

}
