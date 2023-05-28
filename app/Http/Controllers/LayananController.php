<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('admin-layout.layanan', compact(['layanans']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-layout.create-layanan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Layanan::create($request->all());

        return redirect('layanan');
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
        $layanan = Layanan::find($id);
        return view('admin-layout.edit', compact(['layanan']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $layanan = Layanan::find($id);
        $layanan->update($request->all());

        return redirect('/layanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $layanan = Layanan::find($id);
        // $layanan->delete();
        
        layanan::where('id', $id)
                ->delete();

        return redirect('/layanan');
    }
}
