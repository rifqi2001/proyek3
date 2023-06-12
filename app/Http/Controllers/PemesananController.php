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
    public function index()
    {
        $pemesanans = Pemesanan::all();
        return view('pemesanan.index', compact('pemesanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($layanans)
        $prices = Layanan::get()->pluck('price', 'id');
        $costs = Layanan::get()->pluck('cost', 'id');
        $layanans = Layanan::get()->pluck('name', 'id');
    
        return view('pemesanan.create', compact('layanans', 'costs', 'prices'));
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
        //
    }
}
