<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class managerController extends Controller
{
    function Index()
    {
        $manager = DB::table('users')->where('role','=','manager')->get();
        return view('v_manager_dashboard', compact('manager'));
    }
}
