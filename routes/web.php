<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

//akan mengarah ke controller
Use App\Http\Controllers\PetugasController;
Route::resource('petugas', PetugasController::class);

//mendefinisikan route dashboard di dalam file web.php
use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//untuk memanggil pasien.controller
Use App\Http\Controllers\PasienController;
Route::resource('pasien', PasienController::class);