<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

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
                'name' => ['string', 'min:3', 'max:255', 'required', 'unique:users,name,' . auth()->id() ],
                'f_name' => ['string', 'required'],
                'l_name' => ['string', 'required'],
                'email' => ['email:dns', 'max:255', 'required'],
                'address' => ['string', 'max:255', 'required'],
                'password' => ['min:8', 'required'],
                'phone' => ['string', 'required', 'max:15'],
            ]);
        }

        $user->update([
            'f_name' => $request->input('f_name'),
            'l_name' => $request->input('l_name'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
        ]);
        // auth()->user()->update([
        //     'name' => $request->name,
        //     'f_name' => $request->f_name,
        //     'l_name' => $request->l_name,
        //     'email' => $request->email,
        //     'address' => $request->address,
        //     'password' => $request->password,
        //     'phone' => $request->phone,
        // ]);

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
