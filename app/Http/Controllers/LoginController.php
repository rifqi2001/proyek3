<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

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

    function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users|max:255',
            'email' => 'required|email:dns|unique:users|max:255',
            'password' => 'required|min:8|'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('error', $validator->errors()->first())
                ->withInput();
        }

        try{
            DB::beginTransaction();
            
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ])->assignRole('customer');
    
            Customer::create([
                'user_id' => $user->id,
            ]);

            DB::commit();
        }catch (\Exception $e) {
            Session::flash('error', 'Gagal membuat akun. Silakan coba lagi.');
    return redirect()->back()->withInput();
        }

        Session::flash('success', 'Akun berhasil dibuat. Silakan login');
        return redirect()->route('login');
    }


    protected function loginApi(Request $request)
    {
        $loginData = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($loginData)){
            $token = Auth::user()->createToken('authToken')->plainTextToken;
            return response()->json([
                'data' => Auth::user(),
                'token' => $token,
            ], 200);
        }

        return response()->json([
            'message' => 'Invalid Credentials',
        ], 401);
    }
}