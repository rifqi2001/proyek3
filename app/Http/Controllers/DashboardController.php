<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $hasil = DB::select('SELECT menghitung_users()  AS `menghitung_users`');
        // dd($hasil);

        return view('admin' , compact('hasil'));
    }
}
