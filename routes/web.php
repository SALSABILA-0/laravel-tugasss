<?php

use App\Http\Controllers\detailLaporanController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [pengaduanController::class, "index"]);

Route::get('/laporan', [laporanController::class, "laporan"]);
Route::post('/laporan', [laporanController::class, "proses_tambah_pengaduan"]);
Route::get('/detailLaporan', [detailLaporanController::class, "tampilData"]);
Route::get('/register', [registerController::class, "register"]);
Route::post('/register', [registerController::class, "proses_tambah_masyarakat"]);
Route::get('/pengaduan', [laporanController::class, "pengaduancontroller"]);

Route::get('/login', function() {
    return view('login');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil', [
        "title" => "Profil"
    ]);
});

Route::get('/verifikasi', function () {
    return view('verifikasi', [
        "title" => "Verifikasi"
    ]);
});

Route::get('/tanggapan', function () {
    return view('tanggapan', [
        "title" => "Tanggapan"
    ]);
});
