<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function() {

    Route::post('login', [\App\Http\Controllers\API\UserController::class, 'login'])->name('login');
    Route::post('register', [\App\Http\Controllers\API\UserController::class, 'register'])->name('register');

    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('getRegisteredUser', 'API\UserController@getRegisteredUser');

        Route::get('getReservationsWithCustomerId/{id}',[\App\Http\Controllers\BookingController::class,'getReservationsWithCustomerId']);
        Route::post('storereservation',[\App\Http\Controllers\BookingController::class, 'store']);
        Route::get('getOneReservation/{id}',[\App\Http\Controllers\BookingController::class,'show']);
        Route::get('deleteBooking/{id}',[\App\Http\Controllers\BookingController::class,'delete']);
        Route::put('updateBooking/{id}',[\App\Http\Controllers\BookingController::class,'update']);


        Route::get('drivers/{compagnyId}',[\App\Http\Controllers\DriverController::class,'index']);
        Route::get('agency', [\App\Http\Controllers\AgencyController::class, 'index']);
        Route::get('reservation', [\App\Http\Controllers\BookingController::class, 'index']);
        Route::get('vehicles', [\App\Http\Controllers\VehicleController::class, 'index']);
        Route::get('user', [\App\Http\Controllers\API\UserController::class, 'index']);
    });



});