<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/manual/data', [ApiController::class, 'data']);

Route::post("/list-manual", [ApiController::class, 'listManual']);
Route::put("/update-manual", [ApiController::class, 'updateManual']);
Route::post("/status-manual", [ApiController::class, 'statusManual']);

Route::put("/update-timer", [ApiController::class, 'updateTimer']);
// Route::get("/update-timer", [ApiController::class, 'updateTimer']);
Route::post("/list-timer", [ApiController::class, 'listTimer']);

Route::post("/data-soil", [ApiController::class, 'dataSoil']);
Route::get("/data-soil", [ApiController::class, 'indexDataSoil'])->name('dataSoil');
Route::get("/action-soil", [ApiController::class, 'indexActionSoil'])->name('actionSoil');

Route::post("/data-weather", [ApiController::class, 'dataWeather']);

Route::post("/pesan", [ApiController::class, 'pesan']);