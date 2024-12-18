<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', function () { return view('emiliya.register');});

Route::get('/login', function () { return view('laila.login');});

Route::get('/home', [HomeController::class, 'sudahLogin'])->name('homeLogin');

Route::get('/egove', function () { return view('jannah.index');});

Route::get('/inkop', function () { return view('jannah.index');});

Route::get('/persandistik', function () { return view('jannah.index');});

Route::get('/kesekretariatan', function () { return view('jannah.index');});

Route::get('/emiliya', function () {return view('welcome');});

Route::get('/pengajuan', [PengajuanController::class, 'sudahLogin'])->name('homeLogin');

Route::get('/project', function () { return view('emiliya.tables-project');});

Route::get('/laporan', function () { return view('laila.charts-diterima');});

Route::get('/profil', function () { return view('laila.user-profil');});

Route::get('/logout', function () { return view('laila.login');});
