<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('users.customer.index')->with([
            'customer' => User::role('customer')->get()
        ]);
    }
}
