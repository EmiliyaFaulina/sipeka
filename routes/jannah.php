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



Route::get('/egov', function () { return view('jannah.egov');});

Route::get('/inkop', function () { return view('jannah.inkop');});

Route::get('/persandistikk', function () { return view('jannah.persandistikk');});

Route::get('/profil', function () { return view('jannah.profil');});


