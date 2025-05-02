<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Vehicle\VehicleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('vehicle',VehicleController::class);
Route::resource('users', UserController::class);

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {

    Route::post('login', [AuthController::class,'login']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh',[AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);

});

