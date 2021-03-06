<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/






Route::auth();

Route::group(['middleware' => ['auth']], function(){

	// resource controllers

	Route::resource('job', 'JobController');
	Route::resource('patient', 'PatientsController');
	Route::resource('employee', 'EmployeesController');
	Route::resource('department', 'DepartmentsController');

	// posts requests
	Route::post('/patient/visits', 'VisitsController@getVisits');
	Route::post('/visitations/{id}', 'PatientVisitsController@store');
	Route::post('/patient/medical-operations', 'MedicalOperationsController@getMedicalOperations');
	Route::post('/employees', 'EmployeesController@search');
	Route::post('/patients', 'PatientsController@search');


	// get requests
	Route::get('/', 'PagesController@index');
	Route::get('/patient/{id}/visitations', 'PatientVisitsController@index');
	Route::get('/patient/{patientId}/visitation/{visitId}', 'PatientVisitsController@show');
	Route::get('/patient/{id}/visitations/create', 'PatientVisitsController@create');
	Route::get('/patient/{id}/visitation/{visitId}/add-employee', 'PatientVisitsController@addEmployee');
	Route::get('/patient/{id}/visitation/{visitId}/add-employee', 'PatientVisitsController@addEmployee');

	Route::get('/logout', function()
	{
		Auth::logout();
		return redirect('login');
	});
});

Route::get('/digid', 'DigidController@index');
Route::get('/tiroler', 'TirolerController@index');
