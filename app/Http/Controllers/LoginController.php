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
            return redirect()->intended('/dashboard');
        }else{
            $messages = [
                'required' => 'Login failed',
            ];
            return redirect()->back()->withErrors($messages)->with('error', $messages);
        }

        // return back()->with('loginError', 'Login Failed!');
    }
}
