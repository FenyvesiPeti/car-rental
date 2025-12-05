<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [CarController::class, 'index'])->name('home');
Route::post('/search', [CarController::class, 'search'])->name('cars.search');
