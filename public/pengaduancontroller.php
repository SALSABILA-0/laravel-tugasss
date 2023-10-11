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
        $pengaduan = DB::table('pengaduan')->get();

        return view('home',['pengaduan' =>  $judul, 'pengaduan' => $pengaduan]);
    }

    function tampil_pengaduan(){
        $judul = "isi pengaduan ";

        return views('isipengaduan',['pengaduan_masyarakat' =>  $pengaduan,]);
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
            'isi_pengaduan' => $isi_pengaduan,
            'foto' => $foto,
            'status' => '0'
        ]);

        return redirect('/home');
    }

    function detail_pengaduan($id){
        $pengaduan = DB::table('pengaduan')
                    ->where('id_pengaduan', '=', $id)
                    ->first();

        return view('update',['TextJudul' =>  $pengaduan,]);
    }

    function hapus($id){
        DB::table('pengaduan')->where('id_pengaduan', '=', $id)->delete();
    
        return redirect()->back();
      }

    }
    
}