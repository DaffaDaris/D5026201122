<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function index()
    {
        // mengambil data dari table keranjangbelanja
        $keranjangbelanja = DB::table('keranjangbelanja')->orderBy('kodebarang', 'asc')->paginate(10);

        // mengirim data keranjangbelanja ke view index
        return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // method untuk menampilkan view form tambah keranjangbelanja
    public function tambah()
    {

        // memanggil view tambah
        return view('keranjangbelanja.tambah');
    }
    // method untuk insert data ke table keranjangbelanja
    public function store(Request $request)
    {


        // insert data ke table keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
        ]);
        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }
    // method untuk edit data keranjangbelanja
    public function edit($id)
    {
        // mengambil data keranjangbelanja berdasarkan id yang dipilih
        $keranjangbelanja = DB::table('keranjangbelanja')->where('ID', $id)->get();
        // passing data keranjangbelanja yang didapat ke view edit.blade.php
        return view('keranjangbelanja.edit', ['keranjangbelanja' => $keranjangbelanja]);
    }
    // update data keranjangbelanja
    public function update(Request $request)
    {
        // update data keranjangbelanja
        DB::table('keranjangbelanja')->where('ID', $request->id)->update([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
        ]);
        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }
    // method untuk hapus data keranjangbelanja
    public function hapus($id)
    {
        // menghapus data keranjangbelanja berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }
}
