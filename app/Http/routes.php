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
	Route::post('/employee', 'EmployeesController@search');

	// get requests
	Route::get('/', 'PagesController@index');
	Route::get('/visitations', 'PatientVisitsController@index');
	Route::get('/visitations/create/{id}', 'PatientVisitsController@create');

	Route::get('/logout', function()
	{
		Auth::logout();
		return redirect('login');
	});
});
