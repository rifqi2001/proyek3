<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $user = User::all();
        return view('profile.index', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        if ($user->hasRole('customer')) {
            $request->validate([
                'name' => ['required', 'string', 'min:3', 'max:255', 'unique:users,name,' . auth()->id() ],
                'f_name' => ['required', 'string'],
                'l_name' => ['required','string'],
                'email' => ['email:dns', 'max:255', 'required'],
                'address' => ['string', 'max:255', 'required'],
                'password' => ['min:8', 'required'],
                'phone' => ['required', 'string', 'max:15'],
            ]);
        }

        $user->update([
            'name' => $request->input('name'),
            'f_name' => $request->input('f_name'),
            'l_name' => $request->input('l_name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
        ]);

        return back()->with('message', 'Profil berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
