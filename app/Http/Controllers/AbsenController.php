<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{
    public function index()
    {
    	$absen = DB::table('absen')->orderBy('Tanggal', 'asc')->get();

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

        $status = "Sedang Mengedit" ;


	    return view('absen.edit',['absen' => $absen,'pegawai' => $pegawai,'status' => $status]);

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

}
