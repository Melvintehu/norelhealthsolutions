<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientVisitRequest;
use App\Employee;
use App\PatientVisit;
use App\EpdPatient;
use App\Patient;
use DB;

use App\Http\Requests;

class PatientVisitsController extends Controller
{
    public function index($id) {
    	$visitations = PatientVisit::where('patient_id', $id)
            ->with('patient')
            ->get();

        $epdPatient = EpdPatient::where('documentNumber', 1234)->first();

        foreach ($visitations as $visitation) {
            foreach ($epdPatient->visitations()->get() as $epdVisitation) {
                if (isset($epdVisitation->date_arrival) && $visitation->date_arrival == $epdVisitation->date_arrival) {
                    $visitation->symptoms = $epdVisitation->symptoms;
                }
            }
        }


    	return view('pages.visitations.index', ['visitations' => $visitations]);
    }

    public function create($id) {
    	return view('pages.visitations.create', ['id' => $id]);
    }

    public function store(PatientVisitRequest $request, $id) {
    	$input = $request->only(['description', 'date_arrival', 'date_discharged', 'emergency', 'symptoms']);
    	$input['patient_id'] = $id;
    	null !== $request->input('emergency') ? '' : $input['emergency'] = 0;

        $patientVisit = PatientVisit::create($input);

        // $documentNumber = $patientVisit->patient()->document_number;
        $documentNumber = 1234;
        $patient = EpdPatient::where('documentNumber', $documentNumber)->first();
        $patient->visitations()->create($input);

        // $patient->visitation = [];

    	return redirect()->action('PatientVisitsController@index', [$id]);
    }

    public function show($patientId, $visitId) {
    	$visitation = PatientVisit::where('id', $visitId)
    		->with('patient')
    		->first();

        $epdVisitations = EpdPatient::where('documentNumber', 1234)->first()->visitations()->get();
        $visitation->symptoms = isset($epdVisitations->where('date_arrival', $visitation->date_arrival)->first()->symptoms) ? $epdVisitations->where('date_arrival', $visitation->date_arrival)->first()->symptoms : '';

    	return view('pages.visitations.visitation', ['visitation' => $visitation]);
    }
}
