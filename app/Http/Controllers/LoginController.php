<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() {
        return view('home');
    }

    public function login() {
        return view('login');
    }

    public function login_action(Request $request) {
        // Validasi
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required | min:8'
        ], [
            'email.required' => 'Email Kosong! Masukan Email terlebih dahulu',
            'password.required' => 'Password Kosong! Masukan Password terlebih dahulu',
            'password.min' => 'Password minimal 8 karakter'
        ]);

        // Authentikasi
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)) {
            return redirect('home')->with('success', 'Berhasil login');
        } else {
            return redirect('home/login')->withErrors('Email dan password yang dimasukkan tidak valid');
        }
    }
}
