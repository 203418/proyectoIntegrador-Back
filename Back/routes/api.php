<?php

use App\Http\Controllers\PlantController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('checkCode')->group(function () {
    Route::post('/plant-get', [PlantController::class, 'getPlant'])->name('plant.get');
    Route::Post('/plant', [PlantController::class, 'postDataPlant'])->name('plant.post');
});


