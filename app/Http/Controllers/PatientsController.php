<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    
use App\EpdMedicine;
use App\EpdPatient;    
use App\EpdMedicalProcedure;
use App\Http\Requests;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $data = [
            'patients' => EpdPatient::orderBy('document_number', 'asc')->paginate(100),
        ];
        
        return view('pages.patients.overzicht', compact('data'));
    }


    /**
     * Display a listing of the resource with param.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
    
        $last = $request->get('last');
     


        $fields = [
            'last_name' => $request->get('last'),
            
        ];



        $patients = [];
        $counter = 0;
        foreach ($fields as $key => $value) {
            if($value == ""){
                break;
            }
            $counter++;
        }

        if($counter == count($fields)){
            $patients = EpdPatient::where($fields)->paginate(100);    
        }else{            
            foreach($fields as $key => $value){
                if(count($patients) == 0){
                    $patient = EpdPatient::where($key, $value)->paginate(100);    
                }else{
                    $patient = $patient->merge(EpdPatient::where($key, $value)->paginate(100));
                }
            }

        }
       

        
       
        





        $data = [
            'patients' => $patients,
        ];

        return view('pages.patients.overzicht', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = [
            'patient' => EpdPatient::where('document_number', '=', intval($id))->first(),
            'medicines_history' => EpdMedicine::where('patient_document_number', '=', intval($id))->where('date_end', '!=', "")->orderBy('date_start')->get(),
            'current_medicines' => EpdMedicine::where('patient_document_number', '=', intval($id))->where('date_end', '=', "")->orderBy('date_start')->get(),
            'EpdMedicalProcedure' => EpdMedicalProcedure::where('document_number', '=', intval($id))->orderBy('date', 'asc')->get(),
        ];

 
        

        return view('pages.patients.details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
