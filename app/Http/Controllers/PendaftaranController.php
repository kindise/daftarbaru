<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function index()
    {
        $agama = DB::table('REF_AGAMA')->get();
        $pendidikan = DB::table('MS_PENDIDIKAN')->get();
        $jk = DB::table('MS_JENIS_KELAMIN')->get();
        $sk = DB::table('MS_STATUS_KAWIN')->get();
        $prov = DB::table('REF_PROPINSI')->get();
        $kabkot = DB::table('REF_KABKOTA')->get();
        $kec = DB::table('REF_KECAMATAN')->get();
        return view('pages.registrasi', compact(
            'agama',
            'pendidikan',
            'jk',
            'sk',
            'prov',
            'kabkot',
            'kec'
        ));
    }

    public function daftarbaru(Request $request)
    { 
        
    }
}
