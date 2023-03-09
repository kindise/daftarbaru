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
        return view('pages.registrasi', compact(
            'agama',
            'pendidikan',
            'jk',
            'sk'
        ));
    }

    public function daftarbaru(Request $request)
    { 
        
    }
}
