<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('sesi.index');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'username wajib diisi',
                'password.required' => 'password wajib diisi'
            ]
        );

        $infologin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('dashboard')->with('success', 'anda berhasil masuk');
        } else {
            return redirect('login')->withErrors('username atau password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }
}