<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Layanan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        \Midtrans\Config::$serverKey = 'SB-Mid-server-RitUzHnJr_UPjTeA7jH-o9p3';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $user = User::find($request->user()->id);
        
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'item_details' => array(
                [
                    'id' => '1',
                    'price' => '80000',
                    'quantity' => 1,
                    'name' => 'Perbaikan AC',
                ],
                [
                    'id' => '2',
                    'price' => '70000',
                    'quantity' => 1,
                    'name' => 'Cuci AC',
                ]
                ),
            'customer_details' => array(
                'first_name' => $user->f_name,
                'last_name' => $user->l_name,
                'email' => $user->email,
                'phone' => $user->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $pemesanans = Pemesanan::all();
        return view('pemesanan.index', compact('pemesanans'), ['snap_token'=>$snapToken]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($layanans)
        $prices = Layanan::get()->pluck('price', 'id');
        $layanans = Layanan::get()->pluck('name', 'id');
    
        return view('pemesanan.create', compact('layanans', 'prices'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $layanans = Layanan::find($request->layanan_id);

    if (!$layanans) {
        return redirect()->back()->with('error', 'Layanan tidak valid.');
    }

        $users = Auth::user();

        if (!$users) {
            return redirect()->back()->with('error', 'Layanan tidak valid.');
        }
        $hargaLayanan = $layanans->price;
        $hargaOngkir = 20000; // Harga default untuk ongkir

    $totalHarga = ($hargaLayanan) * $request->jumlah + ($hargaOngkir);

        $pemesanans = Pemesanan::create([
            'name' => $layanans->name,
            'jumlah' => $request->jumlah,
            'total' => $totalHarga,
            'tipe' => $request->tipe,
            'description' => $request->description,
            'status' => 'Belum Dikonfirmasi',
            'user_id' => $users->id,
            'layanans_id' => $layanans->id,
        ]);

        // dd($pemesanans);

        return redirect()->route('pemesanan.index', compact('pemesanans',))->with('success', 'Pemesanan berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pemesanan::where('id', $id)->delete();

    return redirect()->route('pemesanan.index');
    }

    public function post(Request $request)
    {
        return $request;
    }

}
