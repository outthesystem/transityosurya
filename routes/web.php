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


Route::get('/', 'FrontendController@index');

Route::get('/result/{qualify}', 'FrontendController@result');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/agencies', 'AgencyController@index');
Route::post('/agencies', 'AgencyController@store');
Route::get('/agency/{agency}', 'AgencyController@edit');
Route::post('/agency/{agency}', 'AgencyController@update');
Route::get('/agencydelete/{agency}', 'AgencyController@destroy');

Route::get('/drivers', 'DriverController@index');
Route::post('/drivers', 'DriverController@store');
Route::get('/driver/{driver}', 'DriverController@edit');
Route::post('/driver/{driver}', 'DriverController@update');
Route::get('/driverdelete/{driver}', 'DriverController@destroy');

Route::get('/owners', 'OwnerController@index');
Route::post('/owners', 'OwnerController@store');
Route::get('/owner/{owner}', 'OwnerController@edit');
Route::post('/owner/{owner}', 'OwnerController@update');
Route::get('/ownerdelete/{owner}', 'OwnerController@destroy');

Route::get('/vehicles', 'VehicleController@index');
Route::post('/vehicles', 'VehicleController@store');
Route::get('/vehicle/{vehicle}', 'VehicleController@edit');
Route::post('/vehicle/{vehicle}', 'VehicleController@update');
Route::get('/vehicledelete/{vehicle}', 'VehicleController@destroy');

Route::get('/qualifications', 'QualificationController@index');
Route::post('/qualifications', 'QualificationController@store');
Route::get('/generateQR/{qualify}', 'QualificationController@generateQR');
Route::get('/qr/{qualify}', 'QualificationController@showQR');
//Route::get('/vehicle/{vehicle}', 'VehicleController@edit');
//Route::post('/vehicle/{vehicle}', 'VehicleController@update');
//Route::get('/vehicledelete/{vehicle}', 'VehicleController@destroy');
