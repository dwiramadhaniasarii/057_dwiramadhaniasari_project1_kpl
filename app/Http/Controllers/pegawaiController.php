<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pegawaiController extends Controller
{
    function Index()
    {
        $pegawai = DB::table('users')->where('role','=','pegawai')->get();
        return view('v_pegawai_dashboard', compact('pegawai'));
        
    }
}
