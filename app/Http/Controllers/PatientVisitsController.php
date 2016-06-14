<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatientVisit;
use App\Patient;
use DB;

use App\Http\Requests;

class PatientVisitsController extends Controller
{
    public function index() {
    	$visitations = PatientVisit::get();

    	return view('pages.visitations.index', ['visitations' => $visitations]);
    }

    public function create() {
    	return view('pages.visitations.create');
    }

    public function store(Request $request) {
    	$input = $request->only(['description', 'date_arrival', 'date_discharged', 'emergency']);
    	$input['patient_id'] = Patient::where('document_number', $request->input('documentNumber'))->pluck('id')->first();
    	null !== $request->input('emergency') ? '' : $input['emergency'] = 0;

    	PatientVisit::create($input);

    	return redirect('visitations');
    }
}
