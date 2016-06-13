<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\Http\Requests;

class DepartmentsController extends Controller
{
    public function index()
    {

    	$departments = Department::paginate(15);
            
        return view('pages.departments.overzicht', ['departments' => $departments]);
    }
}
