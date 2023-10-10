<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;

Route::get('/home', [PengaduanController::class, 'index']);
Route::get('/isipengaduan', [PengaduanController::class, 'tampil_isi_pengaduan']);
Route::post('/isipengaduan', [PengaduanController::class, 'proses_isi_pengaduan']);