<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Manufacturer\ManufacturerController;
use App\Http\Controllers\Api\Vehicle\VehicleController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('vehicle',VehicleController::class);
Route::get('manufacturer',ManufacturerController::class);



