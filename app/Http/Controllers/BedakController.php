<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BedakController extends Controller
{
    public function index()
    {
        // mengambil data dari table bedak
        $bedak = DB::table('bedak')->orderBy('merkbedak', 'asc')->paginate(10);

        // mengirim data bedak ke view index
        return view('bedak.index', ['bedak' => $bedak]);
    }

    // method untuk menampilkan view form tambah bedak
    public function tambah()
    {

        // memanggil view tambah
        return view('bedak.tambah');
    }
    // method untuk insert data ke table bedak
    public function store(Request $request)
    {


        // insert data ke table bedak
        DB::table('bedak')->insert([
            'merkbedak' => $request->merk,
            'stockbedak' => $request->stok,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman bedak
        return redirect('/bedak');
    }
    // method untuk edit data bedak
    public function edit($id)
    {
        // mengambil data bedak berdasarkan id yang dipilih
        $bedak = DB::table('bedak')->where('kodebedak', $id)->get();
        // passing data bedak yang didapat ke view edit.blade.php
        return view('bedak.edit', ['bedak' => $bedak]);
    }
    // update data bedak
    public function update(Request $request)
    {
        // update data bedak
        DB::table('bedak')->where('kodebedak', $request->id)->update([
            'merkbedak' => $request->merk,
            'stockbedak' => $request->stok,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman bedak
        return redirect('/bedak');
    }
    // method untuk hapus data bedak
    public function hapus($id)
    {
        // menghapus data bedak berdasarkan id yang dipilih
        DB::table('bedak')->where('kodebedak', $id)->delete();

        // alihkan halaman ke halaman bedak
        return redirect('/bedak');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table bedak sesuai pencarian data
		$bedak = DB::table('bedak')
		->where('merkbedak','like',"%".$cari."%")
		->paginate(10);

    		// mengirim data bedak ke view index
		return view('bedak.index',['bedak' => $bedak]);

	}
    public function view($id)
    {
        // mengambil data bedak berdasarkan id yang dipilih

        $bedak = DB::table('bedak')->where('kodebedak',$id)->get();
        // passing data bedak yang didapat ke view edit.blade.php
        return view('bedak.detail',['bedak' => $bedak]);

    }

}
