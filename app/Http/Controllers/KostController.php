<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function index()
    {
        $kost = Kost::where('status', 'Tersedia');
        return view('pages.list-kost', [
            'kosts' => $kost
        ]);
    }

    public function show($id)
    {
        $kost = Kost::findOrFail($id);
        return view('pages.detail', [
            'kost' => $kost
        ]);
    }
}
