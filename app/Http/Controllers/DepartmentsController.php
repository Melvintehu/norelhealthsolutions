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



    public function store(Request $request)
    {
        Department::create($request->all());

    	return redirect('/department');
    }


    public function create(){

        return view('pages.departments.add');
    }
}
