<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $hasil_user = DB::select('SELECT menghitung_users()  AS `menghitung_users`');
        $total_customers = DB::select('SELECT menghitung_customers() AS `menghitung_customers`');
        $total_teknisi = DB::select('SELECT menghitung_teknisi() AS `menghitung_teknisi`');
        // dd($hasil);

        return view('admin' , compact('hasil_user', 'total_customers', 'total_teknisi'));
    }
}
