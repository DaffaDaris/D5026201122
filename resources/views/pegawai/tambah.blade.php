@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'TAMBAH PEGAWAI')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="pegawai_nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_nama'>
		                <input type="text" name="nama" required="required"> <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="pegawai_jabatan" class="col-sm-2 control-label">Jabatan :</label>
                    <div class='col-sm-4 input-group date' id='pegawai_jabatan'>
		               <input type="text" name="jabatan" required="required"> <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="pegawai_umur" class="col-sm-2 control-label">Umur :</label>
                    <div class='col-sm-4 input-group date' id='pegawai_umur'>
		                <input type="number" name="umur" required="required"> <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="pegawai_alamat" class="col-sm-2 control-label">Alamat :</label>
                    <div class='col-sm-4 input-group date' id='pegawai_alamat'>
                    <textarea name="alamat" required="required"></textarea> <br/>
                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data">
    </div>
	</form>
    @endsection
