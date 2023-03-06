<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KuliahController;

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
    return view('layouts.template');
});

//Dashboaard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dash');


//Profile
Route::get('/profile', [ProfilController::class, 'index'])->name('prof');

//Pengalaman 
Route::get('/pengalaman-kuliah', [KuliahController::class, 'index'])->name('pk');