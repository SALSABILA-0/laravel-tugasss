<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;

Route::get('/home', [PengaduanController::class, 'index']);
Route::get('/isipengaduan', [PengaduanController::class, 'tampil_pengaduan']);
Route::post('/isipengaduan', [PengaduanController::class, 'proses_tambah_pengaduan']);
Route::get('/hapuspengaduan/{id}', [PengaduanController::class, 'hapus']);

Route::get('/detail-pengaduan/{id}', [PengaduanController::class, "detail_pengaduan"]);

// Route::get('about', function(){
//     return "ini halaman about";
// });

// Route::get('about', function(){
//     return view("about");
// });

Route::get('/about/{id}', [pengaduanController::class, 'tampil_about']);

Route::get('/pengaduan/{id}', [pengaduanController::class, 'detail_pengaduan']);