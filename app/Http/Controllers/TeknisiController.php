<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.teknisi.index')->with([
            'teknisi' => User::role('teknisi')->get()
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

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users|max:255',
            'email' => 'required|email:dns|max:255',
            'password' => 'required|min:8|'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('error', $validator->errors()->first())
                ->withInput();
        }

        try {
            DB::beginTransaction();

                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ])->assignRole('teknisi');

                Teknisi::create([
                    'user_id' => $user->id,
                ]);

        DB::commit();

        }catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }

        return redirect()->route('teknisi')->with('success','Data berhasil ditambah');
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
        return view('users.teknisi.edit')->with([
            'teknisi' => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teknisi = User::find($id);
        $teknisi->update($request->all());

        return redirect('/teknisi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        // $teknisi = User::find($id);
        // $teknisi->delete();

        User::where('id', $id)
                ->delete();

    return redirect('/teknisi');
    }
}
