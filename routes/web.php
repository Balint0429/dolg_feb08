<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;

Route::get('/cars', [CarController::class, 'getCars']);
Route::get('/car', [CarController::class, 'getOneCar']);
Route::post('/car', [CarController::class, 'addCar']);
Route::put('/car', [CarController::class, 'modifyCar']);
Route::delete('/car', [CarController::class, 'destroyCar']);


Route::get('/', function () {
    return view('welcome');
});
