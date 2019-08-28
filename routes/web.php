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

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function(){


    Route::get('/home', 'HomeController@index')->name('home');

    // vehicle route
    Route::get('/vehicle', 'VehicleController@index')->name('vehicle');
    Route::get('/vehicleShow/{id?}', 'VehicleController@Show')->name('vehicleShow');
    Route::post('/vehicleStore', 'VehicleController@store')->name('vehicleStore');
    Route::put('/vehicleUpdate/{id?}', 'VehicleController@update')->name('vehicleUpdate');
    Route::put('/vehicleSelling/{id?}', 'VehicleController@sell')->name('vehicleSelling');
    Route::delete('/vehicleDestroy/{id?}', 'VehicleController@destroy')->name('vehicleDestroy');
    Route::get('/getTargetVehicle/{id?}', 'VehicleController@getTargetVehicle')->name('getTargetVehicle');

    // step route
    Route::get('/step/{id?}', 'StepController@index')->name('step');
    Route::post('/stepStore', 'StepController@store')->name('stepStore');
    Route::delete('/stepDestroy/{id?}', 'StepController@destroy')->name('stepDestroy');

    //report route
    Route::get('/vehicleReport/{id?}', 'VehicleController@report')->name('vehicleReport');
    Route::get('/vehicleReport2/{id?}', 'VehicleController@report2')->name('vehicleReport2');
    Route::get('/reportListOfCars/{type?}', 'VehicleController@reportListOfCars')->name('reportListOfCars');

    // Registration Routes...

    //Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    //Route::post('register', 'Auth\RegisterController@register');

});
