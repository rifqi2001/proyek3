<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Layanan;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        // $hasil_user = DB::select('SELECT menghitung_users()  AS `menghitung_users`');
        // $total_customers = DB::select('SELECT menghitung_customers() AS `menghitung_customers`');
        $total_customers = Customer::count();
        $total_teknisi = Teknisi::count();
        $total_layanan = Layanan::count();
        // dd($total);
        // $total_teknisi = DB::select('SELECT menghitung_teknisi() AS `menghitung_teknisi`');
        // $total_layanan = DB::select('SELECT jumlah_layanan() AS `jumlah_layanan`');

        return view('admin' , compact('total_customers', 'total_teknisi', 'total_layanan'));
    }
}
