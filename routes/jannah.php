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

Route::get('/home', function () { return view('jannah.index');});

Route::get('/egov', function () { return view('jannah.egov');});

Route::get('/inkop', function () { return view('jannah.inkop');});

Route::get('/persandistik', function () { return view('jannah.persandistik');});


