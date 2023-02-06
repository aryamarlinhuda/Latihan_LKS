<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() {
        return view('beforelogin.home');
    }

    public function login() {
        return view('beforelogin.login');
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
            return redirect('dashboard/home')->with('success', 'Login Berhasil');
        } else {
            return redirect('home/login')->withErrors('Email dan password yang dimasukkan tidak valid');
        }
    }

    // Dashboard
    public function dashboard(Request $request) {
        return view('afterlogin.home',['data' => $request]);
    }

    // Logout
    public function logout() {
        Auth::logout();
        return redirect('home')->with('success', 'Logout Berhasil');
    }
}
