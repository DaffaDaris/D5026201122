@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'TAMBAH ABSEN')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')
    <a href="/absen"> Kembali</a>

    <br />
    <br />

    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <div class="container">

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="Status" class="col-sm-2 control-label"> Status :</label>
                        <div class='col-sm-4 input-group date' id='Status'>
                            <input type="radio" id="h" name="status" value="H">
                            <label for="H">HADIR</label><br>
                            <input type="radio" id="a" name="status" value="A" checked="checked">
                            <label for="A">TIDAK HADIR</label><br>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Simpan Data">
        </div>


    </form>
@endsection

