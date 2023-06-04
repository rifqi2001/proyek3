<?php

namespace App\Http\Controllers;

use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class TeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.teknisi.index')->with([
            'teknisi' => Teknisi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('users.teknisi.create-teknisi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users|max:12',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|'
        ]);

        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();

        return to_route('teknisi.index')->with('success','Data berhasil ditambah');
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
