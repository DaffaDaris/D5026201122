@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DATA PEGAWAI')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')
@foreach($pegawai as $p)
    <div class="container">Detail dari {{ $p->pegawai_nama }}</div>
@endforeach
    <br>
    <br>

        @foreach($pegawai as $p)
        <form action="/pegawai" method="get">
            {{ csrf_field() }}
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="pegawai_nama" class="col-sm-2 control-label">ID Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_nama'>
                        <label type="text" class="form-control label-input" name="id" >{{ $p->pegawai_id }}</label><br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="pegawai_nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_nama'>
                            <label type="text" class="form-control label-input"name="nama" >{{ $p->pegawai_nama }}</label> <br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="pegawai_jabatan" class="col-sm-2 control-label">Jabatan :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_jabatan'>
                            <label type="text" class="form-control label-input" name="jabatan" >{{ $p->pegawai_jabatan }}</label> <br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="pegawai_umur" class="col-sm-2 control-label">Umur :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_umur'>
                            <label type="number" class="form-control label-input" name="umur">{{ $p->pegawai_umur}} Tahun </label><br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="pegawai_alamat" class="col-sm-2 control-label">Alamat :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_alamat'>
                            <label class="form-control label-input" name="alamat">{{ $p->pegawai_alamat }}</label> <br/>
                        </div>
                    </div>
                </div>

            <input type="submit" value="Kembali">
        </form>
@endforeach
 @endsection

