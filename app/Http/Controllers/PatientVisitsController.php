<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientVisitRequest;
use App\Employee;
use App\PatientVisit;
use App\Patient;
use DB;

use App\Http\Requests;

class PatientVisitsController extends Controller
{
    public function index($id) {
    	$visitations = PatientVisit::where('patient_id', $id)->get();

    	return view('pages.visitations.index', ['visitations' => $visitations]);
    }

    public function create($id) {
    	$employees = [];
    	foreach (Employee::get() as $employee) {
    		array_push($employees, $employee['id']);
    	}

    	return view('pages.visitations.create', ['id' => $id, 'employees' => $employees]);
    }

    public function store(PatientVisitRequest $request, $id) {
    	$input = $request->only(['description', 'date_arrival', 'date_discharged', 'emergency']);
    	$input['patient_id'] = $id;
    	null !== $request->input('emergency') ? '' : $input['emergency'] = 0;

    	PatientVisit::create($input);

    	return redirect()->action('PatientVisitsController@index');
    }

    public function show($id) {
    	$visitation = PatientVisit::where('id', $id)
    		->with('patient')
    		->get();

    	return view('pages.visitations.visitation', ['visitation' => $visitation]);
    }
}
