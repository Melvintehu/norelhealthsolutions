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

// This should go in a service provider
App::bind('Pusher', function($app) {
	$keys = $app['config']-> get('services.pusher');
	return new Pusher($keys['public'], $keys['secret'], $keys['app_id']);
});

Route::any('test', function() {

	App::make('Pusher')->trigger('updates', 'job_added', ['message' => 'TEST']);
	return 'Done';

});



Route::auth();

Route::group(['middleware' => ['auth']], function(){

	// resource controllers

	Route::resource('job', 'JobController');
	Route::resource('patient', 'PatientsController');
	Route::resource('employee', 'EmployeesController');
	Route::resource('department', 'DepartmentsController');

	// posts requests
	Route::post('/patient/visits', 'VisitsController@getVisits');
	Route::post('/patient/medical-operations', 'MedicalOperationsController@getMedicalOperations');
	Route::post('/employees', 'EmployeesController@search');

	// get requests
	Route::get('/', 'PagesController@index');
	Route::get('/logout', function()
	{
		Auth::logout();
		return redirect('login');
	});

});

