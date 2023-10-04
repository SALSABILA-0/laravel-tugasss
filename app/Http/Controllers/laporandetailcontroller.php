<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailLaporanController extends Controller
{
    function tampilData() {
        $title = "Detail Laporan";
        $pengaduan = DB::table('pengaduan')->get();
        // $pengaduan = DB::table('pengaduan')
        //     ->join('masyarakat', 'pengaduan.nik', '=', 'masyarakat.nik')
        //     ->select('masyarakat.nama', 'pengaduan.isi_laporan', 'pengaduan.foto', 'pengaduan.status')
        //     ->get();
            
        return view('/detailLaporan', [
            "title" => $title,
            "pengaduan" => $pengaduan   
        ]);
    }
}