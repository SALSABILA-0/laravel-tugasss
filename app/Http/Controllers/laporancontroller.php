<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class laporanController extends Controller
{
    function laporan() {
            $title = "Laporan";
            return view('laporan', [
                "title" => $title
            ]);
    }

    function proses_tambah_pengaduan(Request $request) {

        // validasi
        $request->validate([
            'isi_laporan' => 'required'
        ]);


        $isi_pengaduan = $request->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '789',
            'isi_laporan' => $isi_pengaduan,
            'foto' => 'zizi.jpg',
            'status' => 'Proses',
        ]);
        return redirect('/detailLaporan');
    }

    function hapus($id)(
        DB::table('pengaduan')->where('id_pengaduan', '', $id)->delete();

        return redirect()->back();
    )
}