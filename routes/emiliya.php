<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aksesController;


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

Route::get('/emiliya', function () {return view('welcome');});

Route::get('/emiliya', function () { return view('emiliya.index');});

Route::get('emiliya/project', function () { return view('emiliya.tables-project');});

Route::get('/pengajuan', function () { return view('laila.pengajuan');});

Route::get('/diterima', function () { return view('laila.charts-diterima');});

Route::get('/register', function () { return view('emiliya.register');});

// Route::get('/login', function () { return view('laila.login');});

Route::post('/login', [aksesController::class, 'akses'])->name('login');

// admin
Route::get('/login-admin', function () { return view('laila.login-admin');});