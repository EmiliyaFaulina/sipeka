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

Route::get('/via', function () {  return view('welcome');});

Route::get('/via', function () { return view('via.index');});

Route::get('/via/Profil', function () { return view('via.users-profile');});

Route::get('/via/Pengajuan', function () { return view('via.components-pengajuan');});

Route::get('via/project', function () { return view('emiliya.tables-project');});

// Route::get('/via/Progres', function () { return view('via.tables-progres');});

Route::get('via/diterima', function () { return view('laila.charts-diterima');});

// Route::get('/via/LaporanDitolak', function () { return view('via.charts-ditolak');});

Route::get('/via/logout', function () { return view('via.pages-logout');});



