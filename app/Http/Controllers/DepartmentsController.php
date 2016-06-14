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

    public static function get_name_by_id($id)
    {
        $department = Department::find($id);
        return $department;
    }   

    public function add()
    {
    	return view('pages.departments.add');
    }

    public function add_department(Request $request)
    {
    	$name = $request->get('name');

    	Department::insert(
				['name' => $name]
    		);

    	$departments = Department::paginate(15);
            
    	return view('pages.departments.overzicht', ['departments' => $departments]);
    }
}
