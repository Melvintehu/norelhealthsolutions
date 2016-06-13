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
	Route::get('/', 'PagesController@index');
	Route::resource('/patients', 'PatientsController@index');
	Route::resource('/employees', 'EmployeesController@index');
	Route::get('/logout', function()
	{
		Auth::logout();
		return redirect('login');
	});
});

