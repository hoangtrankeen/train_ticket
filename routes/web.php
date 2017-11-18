<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
	return view('welcome');
});

// Route::get('/form', function () {
// 	return view('auth/register2');
// });


Auth::routes();

// Route::prefix('dashboard')->middleware('role:superadministrator|administrator|editor|author|contributor|supporter|subscriber')->group(function(){
Route::prefix('dashboard')->group(function(){
	Route::get('/', 'ManageController@index');
	Route::resource('/users', 'UserController');
	
	Route::resource('roles', 'RoleController');

	Route::resource('permissions', 'PermissionController');

	Route::resource('tau', 'TauController');


	Route::resource('toa', 'ToaController');

	Route::resource('ghe', 'GheController');

	Route::resource('ve', 'VeController');

	Route::resource('hanhtrinh', 'HanhTrinhController');

	Route::resource('ga', 'GaController');

	//Course
	Route::resource('khach', 'KhachController');

	Route::resource('ve', 'VeController'); 

	Route::resource('thongke', 'ThongKeController'); 

	Route::get('/tracuu', 'DatVeController@tracuu');
	Route::get('/datve', 'DatVeController@datve');
	

});	


