<?php

use Illuminate\Support\Facades\Route;
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


// pengajuan
Route::get('/egov', [PengajuanController::class, 'index'])->name('egov');
Route::post('/aksi-Pengajuan', [PengajuanController::class, 'pengajuan'])->name('pengajuanAksi');
route::get('/data-pengajuan', [PengajuanController::class, 'dataPengajuan'])->name('dataPengajuan');


Route::get('/inkop', function () { return view('jannah.inkop');});

Route::get('/persandistikk', function () { return view('jannah.persandistikk');});

Route::get('/profil', function () { return view('jannah.profil');});


