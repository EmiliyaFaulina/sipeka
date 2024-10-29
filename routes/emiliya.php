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

Route::get('/emiliya', function () {return view('welcome');});

Route::get('/emiliya', function () { return view('emiliya.index');});

Route::get('emiliya/project', function () { return view('emiliya.tables-project');});

Route::get('/pengajuan', function () { return view('emiliya.pengajuan');});

Route::get('/diterima', function () { return view('emiliya.charts-diterima');});

Route::get('/registerrrrrr', function () { return view('emiliya.register');});