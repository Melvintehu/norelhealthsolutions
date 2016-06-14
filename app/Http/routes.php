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
	Route::post('/employee', 'EmployeesController@search');
	Route::post('/employee/{id}', 'EmployeesController@employee');
	Route::post('/departments/add_department', 'DepartmentsController@add_department');

	Route::get('/', 'PagesController@index');
	Route::get('/departments/add', 'DepartmentsController@add');
	Route::resource('/patient', 'PatientsController');
	Route::resource('/employees', 'EmployeesController');
	Route::resource('/departments', 'DepartmentsController');
	Route::resource('/visitations', 'PatientVisitsController');
	Route::get('/logout', function()
	{
		Auth::logout();
		return redirect('login');
	});
});

