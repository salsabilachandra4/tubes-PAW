<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

  
        $credentials = $request->validate([  //$request ini object yang isinya semua data dari form login yang dimasukin/yg didaftarin
            //validate buat validasi input dr formnya bener ngga. kalo ngga, laravel otomatis ngembaliin eror 
            'email' => ['required', 'email'],
            //masukin email harus diisi (required) dan punya format email yang bener
            'password' => ['required', 'min:8'] 
            //required berarti passwor harus diisi dan minimal 8 karakter
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'Email tidak ditemukan',
            'password' => 'Password salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        //Menghapus sesi autentikasi: Ini memastikan bahwa ID pengguna yang tersimpan dalam session dihapu
        return redirect('/login');
        //Fungsi ini ngarahin pengguna ke halaman login setelah mereka keluar
    }
}
