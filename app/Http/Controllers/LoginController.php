<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login',
        ['title' => 'Login']);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            $roles = ['superAdmin', 'adminAplikasi', 'teknisi', 'customer'];
            $user = Auth::user();

            if($user->hasRole($roles)) {
                return redirect()->intended('/dashboard');
            } else {
                $messages = [
                    'required' => 'Login failed',
                ];
                return redirect()->back()->withErrors($messages)->with('error', $messages);
            }

        }else{
            $messages = [
                'required' => 'Login failed',
            ];
            return redirect()->back()->withErrors($messages)->with('error', $messages);
        }

        // return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
