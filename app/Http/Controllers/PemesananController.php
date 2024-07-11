<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Kategori;
use App\Models\Pemesanan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produk = Produk::all();
        $kategori = Kategori::all();
        $id_kategori = $request->get('id_kategori');
        if ($id_kategori) {
            $produk = Produk::where('id_kategori', $id_kategori)->get();
        } else {
            $produk = Produk::orderBy('created_at', 'desc')->get();
        }
        $pemesanan = Pemesanan::all();
        return view('pemesanan.index', compact('pemesanan', 'produk', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        return view('pemesanan.create', compact('pemesanan', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

// Debugging: Menampilkan isi dari $request
// dd($request->all());

        $pemesanan = new Pemesanan;
        $pemesanan->id_produk = $request->id_produk;
        $pemesanan->nama_pemesan = $request->nama_pemesan;
        $pemesanan->jumlah = $request->jumlah;
        $pemesanan->tambahan = $request->tambahan;

        Alert::success('Berhasil Dipesan', 'Mohon tunggu pesanan anda');
        $pemesanan->save();
        return redirect()->route('pemesanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemesanan = Produk::findOrFail($id);
        return view('pemesanan.index', ['pemesanan' => $pemesanan]);

    }

}
