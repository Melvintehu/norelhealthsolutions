<?php

namespace App\Http\Controllers;
date_default_timezone_set('Europe/Amsterdam');
use Illuminate\Http\Request;

use Crypt;
use App\Employee;
use App\EmployeeJob;
use App\Department;
use App\Job;
use App\User;
use App\Http\Requests;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employees = Employee::paginate(15);

        return view('pages.employees.overzicht', ['employees' => $employees]);
    }

    /**
     * Display a listing of the resource with param.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
    
        $last = $request->get('last');

        $employees = Employee::where('last_name', '=', $last)->paginate(15);

        return view('pages.employees.overzicht', ['employees' => $employees]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);

        return view('pages.employees.employee', ['employee' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data = [
            'departments' => Department::lists('name','id'),
            'jobs' => Job::lists('name','id'),
        ];

        return view('pages.employees.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $user = User::create($request->all());
        $user->fill([
                'email' => $request->email,
                'password' => bcrypt($request->password),

            ])->save();
        $employee = new Employee();
        $employee->department_id = $request->get('department_id');
        $employee->first_name = $request->get('first_name');
        $employee->last_name = $request->get('last_name');
        $employee->user_id = $user->id;
        $employee->save();
        $job_id = $request->get('job_id');
        $employee->jobs()->attach($job_id, ['date_start' => date('Y-m-d H:i:s', time()) ]);

        
        return redirect('/employee');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'employee' => Employee::find($id),
            'departments' => Department::lists('name', 'id'),
            'jobs' => Job::lists('name', 'id'),
        ];

        return view('pages.employees.update', compact('data'));
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

        $employeeOld = Employee::find($id);
        $jobs = $employeeOld->jobs;
        $job_id = $request->get('job_id');
        if(count($jobs) == 0){
            
            $employeeOld->jobs()->attach($job_id, ['date_start' => date('Y-m-d H:i:s', time()) ]);
        }

        // Als de job aangepast wordt end_date vandehuidige job op de huidige datetime.
        foreach($jobs as $job){
            if($job->pivot->date_end == "0000-00-00 00:00:00" && $job->pivot->job_id != $job_id){
                
                $job->pivot->date_end = date('Y-m-d H:i:s', time());
                $job->pivot->save(); 
            
                // de nieuwe baan opslaan
                $employeeOld->jobs()->attach($job_id, ['date_start' => date('Y-m-d H:i:s', time()) ]);

            }
           
        }

        // department_id in Employee aanpassen
        $employeeOld->update($request->all());
        


        return redirect('/employee');
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
