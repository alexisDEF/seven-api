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


    Route::post('login', [\App\Http\Controllers\API\UserController::class, 'login']);
    Route::post('register', [\App\Http\Controllers\API\UserController::class, 'register']);
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('getRegisteredUser', 'API\UserController@getRegisteredUser');
    });

    Route::post('storereservation',[\App\Http\Controllers\ReservationController::class, 'store']);

    Route::get('drivers',[\App\Http\Controllers\DriverController::class,'index']);
    Route::get('agency', [\App\Http\Controllers\AgencyController::class, 'index']);
    Route::get('vehicles', [\App\Http\Controllers\VehicleController::class, 'index']);
    Route::get('user', [\App\Http\Controllers\API\UserController::class, 'index']);

});