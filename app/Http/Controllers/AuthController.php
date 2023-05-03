<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('login.index');
    }

    public function auth(Request $request) {
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($login)) { 
            $request->session()->regenerate();

            if(Auth::user()->role == "admin") {
                return redirect()->route('indexAdmin');
            } else {
                return redirect()->route('indexPetugas');
            }
        }

        return back()->with('loginError','Email atau Password Tidak Sesuai');
    }

    public function logout() {
        Auth::logout();

        Request()->session()->invalidate();
        request()->session()->regenerate();

        return redirect()->route('login');
    }
}
