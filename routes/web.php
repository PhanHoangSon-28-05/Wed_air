<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\AircraftController;
use App\Http\Controllers\PilotController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\HomeController;

/*HOME*/
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/search-flight', [HomeController::class, 'searchFlight'])->name('search.flight');
Route::get('/list-flight', [HomeController::class, 'listFlight'])->name('list.flight');
Route::get('/list-aircraft', [HomeController::class, 'listAircraft'])->name('list.aircraft');
Route::get('/list-pilot', [HomeController::class, 'listPilot'])->name('list.pilot');
Route::get('/list-certification', [HomeController::class, 'listCertification'])->name('list.certification');
/*ADMIN*/
Route::prefix('admin')->group(function() {
    Auth::routes([
        'register' => true, // enable registration
        'reset' => true, // enable password reset
        'verify' => false, // enable email verification
    ]);
    Route::resource('flight', FlightController::class);
    Route::resource('aircraft', AircraftController::class);
    Route::resource('pilot', PilotController::class);
    Route::resource('certification', CertificationController::class);
})->middleware('auth');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');

