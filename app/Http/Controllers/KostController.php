<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;

class KostController extends Controller
{

    public function landing()
    {
        $kost = Kost::where('status', 'Tersedia')->latest()->take(4)->get();
        //mengambil data dari tabel kost dengan kondisi status tersedia. Data yang dipilih hanya kos dengan status tersedia
        //latest mengurutkan data berdasarkan data terbaru yang diambil dari created_at
        //take 4 itu dibatesin cuma 4 aja yang di tampilin, mau sebanyak apa kos2an yg ada yg ditampilin di landing page cuma 4
        return view('landing', [
            'kosts' => $kost
        ]);
        //view landing menentukan view yang akan dijalankan adalah resources/views/landing.blade.php 
        // 'kosts' => $kost mengirim data kost dari hasil query ke view dalam bentuk array dengan key kosts

    }
    
    public function index()
    {
        $kost = Kost::where('status', 'Tersedia')->get();
        // $kost = Kost::all();
        return view('pages.list-kost', [
            'kosts' => $kost
        ]);
    }

    public function show($id)
    {
        $kost = Kost::findOrFail($id);
        return view('pages.detail-kost', [
            'kost' => $kost
        ]);
    }
}
