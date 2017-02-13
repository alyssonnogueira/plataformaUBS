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

  Route::get('/', function () {
      return response()->json(['message' => 'UBS API', 'status' => 'Connected']);;
  });

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

Route::get('/', function () {
    return redirect('api');
});

#Route::get('/', function () {
#    return view('welcome');
#});
