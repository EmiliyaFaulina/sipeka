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

Route::get('/via', function () {  return view('welcome');});

Route::get('/via', function () { return view('via.index');});

Route::get('via/profil', function () { return view('laila.users-profile');});

Route::resource('/via/pengajuan', PengajuanController::class);
Route::get('/via/{id}/pengajuan/set-status', [PengajuanController::class, 'statusPengajuan'])->name('updatestatus');

Route::get('via/project', function () { return view('emiliya.tables-project');});

// Route::get('/via/Progres', function () { return view('via.tables-progres');});

Route::get('via/diterima', function () { return view('laila.charts-diterima');});

// Route::get('/via/LaporanDitolak', function () { return view('via.charts-ditolak');});

Route::get('/via/logout', function () { return view('via.pages-logout');});



