<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        dd($request->all());

        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required', 'min:8']
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                Alert::success('Login Success', 'Login Berhasil!');
                return redirect()->intended('/admin/dashboard');
            }

        } catch (\Throwable $th) {
            Alert::error('Login Failed', 'Login tidak berhasil!');
            return back()->withErrors([
                'email' => 'Email tidak ditemukan',
                'password' => 'Password salah',
            ]);
        }
    }
}
