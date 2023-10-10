<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    function register() {
        $title = "Register";
        return view('register', [
            "title" => $title
        ]);
    }

    function proses_tambah_masyarakat(Request $request) {

        $nik = $request->nik;
        $nama = $request->nama;
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;

        DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'telp' => $telp
        ]);
        return redirect('/login');
    }
}