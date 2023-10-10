<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;

class pengaduanController extends Controller
{
    function index(){
        $judul ="ini data laporan anjay";
        $pengaduan = DB::table('pengaduan_masyarakat')->get();

        return view('home',['TextJudul' =>  $judul, 'pengaduan' => $pengaduan]);
    }

    function tampil_pengaduan(){
        $judul = "isi pengaduan ";

        return view('isi-pengaduan',['TextJudul' =>  $judul,]);
    }

    function proses_tambah_pengaduan(Request $request){
        $request->validate([
            'isi_laporan' => 'required|min:5'
        ]);
        $isi_pengaduan = $request -> isi_laporan;
        $foto = $request -> foto;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('y-m-d'),
            'nik' => '123',
            'isi_laporan' => $isi_pengaduan,
            'foto' => $foto,
            'status' => '0'
        ]);

        return redirect('/home');
    }

    function tamp
    if_update(){
        $judul = "selamat datang di Update";

        return view('update',['TextJudul' =>  $judul,]);
    }
}