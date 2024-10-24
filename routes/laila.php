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

// Route::get('/laila', function () { return view('welcome'); });
Route::get('/lai', function () { return view('laila.index');});
Route::get('/diterima', function () { return view('laila.charts-diterima');});
Route::get('lai/profil', function () { return view('laila.users-profile');});
Route::get('lai/pengajuan', function () { return view('laila.users-pengajuan');});

