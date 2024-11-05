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
Route::get('/laila', function () { return view('laila.index');});

Route::get('laila/diterima', function () { return view('laila.charts-diterima');});

Route::get('laila/profil', function () { return view('laila.users-profile');});

Route::get('laila/pengajuan', function () { return view('via.components-pengajuan');});

Route::get('laila/project', function () { return view('emiliya.tables-project');});

// Route::get('register', function () { return view('emiliya.register');});

Route::get('logout', function () { return view('laila.login');});


 