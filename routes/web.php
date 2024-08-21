<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LogAlatController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoilController;
use App\Http\Controllers\TimerController;
use App\Http\Controllers\WeatherController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
});

Route::get('/device/guest', [DeviceController::class, 'index'])->name('index.device.guest');
Route::get('/manual/guest', [ManualController::class, 'index'])->name('index.manual.guest');
Route::get('/timer/guest', [TimerController::class, 'index'])->name('index.timer.guest');
Route::get('/soil/guest', [SoilController::class, 'index'])->name('index.soil.guest');
Route::get('/weather/guest', [WeatherController::class, 'index'])->name('index.weather.guest');
Route::get('/log-alat/guest', [LogAlatController::class, 'index'])->name('index.logAlat.guest');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/device', DeviceController::class);
    Route::resource('/manual', ManualController::class);

    Route::get('/timer', [TimerController::class, 'index'])->name('index.timer');
    Route::post('/timer/store', [TimerController::class, 'store'])->name('store.timer');
    Route::post('/timer/delete', [TimerController::class, 'destroy'])->name('delete.timer');
    Route::get('/timer/edit', [TimerController::class, 'edit'])->name('edit.timer');
    Route::put('/timer/update', [TimerController::class, 'update'])->name('update.timer');

    Route::get('/soil', [SoilController::class, 'index'])->name('index.soil');
    Route::post('/soil', [SoilController::class, 'action'])->name('action.soil');
    Route::get('/soil/data', [SoilController::class, 'indexData'])->name('indexData.soil');
    Route::get('/soil/data/view', [SoilController::class, 'viewExportTable'])->name('table.soil');
    Route::get('/soil/data/export', [SoilController::class, 'exportTable'])->name('export.soil');

    Route::get('/weather', [WeatherController::class, 'index'])->name('index.weather');
    Route::get('/weather/data', [WeatherController::class, 'viewExportTable'])->name('table.weather');
    Route::get('/weather/export', [WeatherController::class, 'exportTable'])->name('export.weather');
    
    Route::get('/log-alat', [LogAlatController::class, 'index'])->name('index.logAlat');
});

require __DIR__.'/auth.php';