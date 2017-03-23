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

Route::group(array('prefix' => 'api'), function(){

  Route::resource('addresses', 'AddressesController');
  Route::resource('auditions', 'AuditionsController');
  Route::resource('consultations', 'ConsultationsController');
  Route::resource('doctors', 'DoctorsController');
  Route::resource('logins', 'LoginsController');
  Route::resource('pacients', 'PacientsController');
  Route::resource('people', 'PeopleController');
  Route::resource('ubs', 'UbsController');
  Route::resource('users', 'UsersController');

});

Route::get('/api', function () {
    return response()->json(['message' => 'UBS API', 'status' => 'Connected']);
});

Route::get('/', function () {
    return view('main');
});

Auth::routes();
//API::routes();

Route::get('/home', 'HomeController@index');

Route::group(array('prefix' => 'doctor'), function(){

  Route::get('/', 'DoctorController@index');
  Route::get('show/{id}', 'DoctorController@show');
  Route::get('edit/{id}', 'DoctorController@edit');
  Route::post('edit/{id}', 'DoctorController@update');
  Route::get('delete/{id}', 'DoctorController@destroy');
  Route::post('store/', 'DoctorController@store');
  Route::get('create/', 'DoctorController@create');
});

Route::group(array('prefix' => 'pacient'), function(){

  Route::get('/', 'PacientController@index');
  Route::get('show/{id}', 'PacientController@show');
  Route::get('edit/{id}', 'PacientController@edit');
  Route::post('edit/{id}', 'PacientController@update');
  Route::get('delete/{id}', 'PacientController@delete');
  Route::get('create', 'PacientController@create');
  Route::post('store/', 'PacientController@store');

});
Route::group(array('prefix' => 'ubs'), function(){

  Route::get('/', 'UbsWebController@index');
  Route::get('show/{id}', 'UbsWebController@show');
  Route::get('edit/{id}', 'UbsWebController@edit');
  Route::post('edit/{id}', 'UbsWebController@update');
  Route::get('delete/{id}', 'UbsWebController@destroy');
  Route::get('create', 'UbsWebController@create');
  Route::post('store/', 'UbsWebController@store');

});
Route::group(array('prefix' => 'ubs'), function(){

  Route::get('/', 'UbsWebController@index');
  Route::get('show/{id}', 'UbsWebController@show');
  Route::get('edit/{id}', 'UbsWebController@edit');
  Route::post('edit/{id}', 'UbsWebController@update');
  Route::get('delete/{id}', 'UbsWebController@destroy');
  Route::get('create', 'UbsWebController@create');
  Route::post('store/', 'UbsWebController@store');

});
Route::group(array('prefix' => 'audition'), function(){
  Route::get('show/{id}', 'HomeController@audition');
});
Route::group(array('prefix' => 'consultation'), function(){
  Route::get('show/{id}', 'HomeController@consultation');
});
