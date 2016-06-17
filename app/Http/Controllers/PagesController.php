<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Employee;
use App\Department;

class PagesController extends Controller
{
    	
	public function login()
	{
		return view('login');
	}

	public function index()
	{
		$data= [
			'user' => Auth::user(),
			'employee' => Employee::all(),
			'department' => Department::all(),
			'departmentCount' =>Department::with('employees')->get()
		];
		return view('pages.dashboard.index', compact('data'));
	}
}
