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

Route::group(array('prefix' => 'api'), function()
{
 
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

Route::get('/home', 'HomeController@index');
