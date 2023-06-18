<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
})->name('welcome'); // name() is used to give a name to the route

// tes mental 
Route::get('/tes-mental', [App\Http\Controllers\TesMentalController::class, 'index'])->name('test');
Route::get('/tes-mental/start', [App\Http\Controllers\TesMentalController::class, 'starttest'])->name('test.start');
Route::post('/tes-mental/procces/result', [App\Http\Controllers\TesMentalController::class, 'procces'])->name('test.process.result');


Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/tes-mental/history', [\App\Http\Controllers\TesMentalController::class, 'historytest'])->name('test.history');
    Route::get('/tes-mental/history/{kodehistory}', [App\Http\Controllers\TesMentalController::class, 'showhistory'])->name('test.show.history');
    Route::get('/konsultasi', [\App\Http\Controllers\TesMentalController::class, 'konsultasi'])->name('konsultasi');
    Route::get('/cerita-mental', [\App\Http\Controllers\CeritaMental::class, 'index'])->name('cerita');
    Route::get('/cerita-mental/read/{slug}', [\App\Http\Controllers\CeritaMental::class, 'show'])->name('cerita.show');
    Route::get('/cerita-mental/create', [\App\Http\Controllers\CeritaMental::class, 'created'])->name('cerita.create');
    Route::post('/cerita-mental/store', [\App\Http\Controllers\CeritaMental::class, 'store'])->name('cerita.store');
    Route::delete('/cerita-mental/destroy/{kodecerita}', [\App\Http\Controllers\CeritaMental::class, 'destroy'])->name('cerita.destroy');

    
});
