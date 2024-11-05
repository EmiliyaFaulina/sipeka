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

Route::get('emiliya/pengajuan', function () { return view('via.components-pengajuan');});

Route::get('emiliya/diterima', function () { return view('laila.charts-diterima');});



Route::get('/login-user', function () { return view('laila.login');});
Route::get('/register', function () { return view('emiliya.register');});


// admin
Route::post('/login', [aksesController::class, 'akses'])->name('login');
Route::get('/login-admin', function () { return view('laila.login-admin');});