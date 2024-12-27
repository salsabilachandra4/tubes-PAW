<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;

class KostController extends Controller
{

    public function landing()
    {
        $kost = Kost::where('status', 'Tersedia')->latest()->take(4)->get();
        return view('landing', [
            'kosts' => $kost
        ]);
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
