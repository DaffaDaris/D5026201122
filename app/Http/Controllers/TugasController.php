<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{
    public function index()
    {
        $tugas = DB::table('tugas')->orderBy('IDPegawai', 'asc')->get();

        return view('tugas.index', ['tugas' => $tugas]);
    }
    public function tambah()
    {

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        return view('tugas.tambah',['pegawai' => $pegawai]);
    }
    public function store(Request $request)
    {

        DB::table('tugas')->insert([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->namaTugas,
            'Status' => $request->status
        ]);

        return redirect('/tugas');
    }
    public function edit($id)
    {

        $tugas = DB::table('tugas')->where('ID', $id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        $status = "Sedang Mengedit" ;


        return view('tugas.edit',['tugas' => $tugas,'pegawai' => $pegawai,'Status' => $status]);
    }

    public function update(Request $request)
    {

        DB::table('tugas')->where('ID', $request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->namaTugas,
            'Status' => $request->status
        ]);

        return redirect('/tugas');
    }


    public function hapus($id)
    {

        DB::table('tugas')->where('ID', $id)->delete();

        return redirect('/tugas');
    }
}
