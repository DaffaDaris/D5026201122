<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{
    public function index()
    {
    	$absen = DB::table('absen')->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')->select('absen.*', 'pegawai.pegawai_nama')->orderBy('Tanggal', 'asc')->paginate(10);;

    	return view('absen.index',['absen' => $absen]);
    }
    public function tambah()
    {

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

	    return view('absen.tambah',['pegawai' => $pegawai]);
    }
    public function store(Request $request)
    {

	    DB::table('absen')->insert([
		    'IDPegawai' => $request->idpegawai,
		    'Tanggal' => $request->tanggal,
		    'Status' => $request->status
	    ]);

	    return redirect('/absen');

    }
    public function edit($id)
    {

	    $absen = DB::table('absen')->where('ID',$id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

	    return view('absen.edit',['absen' => $absen,'pegawai' => $pegawai]);

    }

    public function update(Request $request)
    {

	    DB::table('absen')->where('ID',$request->id)->update([
		    'IDPegawai' => $request->idpegawai,
		    'Tanggal' => $request->tanggal,
		    'Status' => $request->status
	    ]);

	    return redirect('/absen');
    }


    public function hapus($id)
    {

	    DB::table('absen')->where('ID',$id)->delete();

	    return redirect('/absen');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$absen = DB::table('absen')
        ->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
		->distinct()
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate(10);

    		// mengirim data pegawai ke view index
		return view('absen.index',['absen' => $absen]);

	}

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih


        $absen = DB::table('absen')
            ->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('absen.*', 'pegawai.*')
            ->where('ID',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('absen.detail',['absen' => $absen]);

    }

}
