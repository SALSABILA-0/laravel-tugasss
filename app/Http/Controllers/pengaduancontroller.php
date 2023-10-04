<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;

use App\Models\Pengaduan;


class PengaduanController extends Controller
{
    function index(){

    $judul = "Selamat Datang";
    $pengaduan = DB::table('pengaduan')->get();
 

    return view('home', ['judul' => $judul, 'pengaduan' => $pengaduan]);
   }

  function tampil_pengaduan(){
    return view('isi_pengaduan');
  }
  function proses_tambah_pengaduan(){
  //$isi_pengaduan = $_POST('isi_pengaduan');
  $isi_pengaduan = $request->isi_laporan;

  //validasi
  $validated = $request->validate([
    'isi_laporan' => 'required|min:2'
  ]);

DB::table('pengaduan_masyarakat')->insert([
  'tgl_pengaduan' => 'date(Y-m-d)',
  'nik' => '123',
  'isi_laporan' => $isi_pengaduan,
  'foto' => '',
  'status' => '0',
]);
  }
} 