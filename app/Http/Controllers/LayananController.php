<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('layanan.layanan', compact(['layanans']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layanan.create-layanan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('error', $validator->errors()->first())
                ->withInput();
        }

        try{
            DB::beginTransaction();
            
            Layanan::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
            ]);

            DB::commit();
        }catch (\Exception $e) {
                Session::flash('error', 'Gagal membuat akun. Silakan coba lagi.');
            return redirect()->back()->withInput();
        }
        return redirect()->back();
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
        return view('layanan.edit', compact(['layanan']));
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
