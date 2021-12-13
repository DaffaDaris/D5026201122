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

        @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="pegawai_nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_nama'>
                            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" readonly> <br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="pegawai_jabatan" class="col-sm-2 control-label">Jabatan :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_jabatan'>
                            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" readonly> <br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="pegawai_umur" class="col-sm-2 control-label">Umur :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_umur'>
                            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur}}" value=" Tahun" readonly> <br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="pegawai_alamat" class="col-sm-2 control-label">Alamat :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_alamat'>
                            <textarea required="required" name="alamat"  readonly>{{ $p->pegawai_alamat }}</textarea> <br/>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Kembali">
        </form>
@endforeach
 @endsection

