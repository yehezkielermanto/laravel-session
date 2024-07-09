<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $nama = $request->nama;
        session(['name' => $nama]);

        return view('welcome', ['name' => $request->session()->get('name')]);
    }
}
