<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;

class HomeController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('kasir.index', compact('pemesanan'));
    }
}
