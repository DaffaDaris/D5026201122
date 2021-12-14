@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'DATA ABSEN')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')
@foreach($absen as $a)
    <div class="container">Detail dari {{ $a->pegawai_nama }}</div>
@endforeach
    <br>
    <br>

	@foreach($absen as $a)
		<form action="/absen" method="get">
            {{ csrf_field() }}
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="pegawai_nama" class="col-sm-2 control-label">ID Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='pegawai_id'>
                        <label type="text" class="form-control label-input" name="id" >{{ $a->pegawai_id }}</label> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date custom-select' id='nama'>
                            <label type="text" class="form-control label-input" name="nama">{{ $a->pegawai_nama }}</label> <br/>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal Masuk :</label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <label type='text' class="form-control label-input" name="tanggal">{{ $a->Tanggal }}"</label>
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
                        <label for="Status" class="col-sm-2 control-label "> Status :</label>
                        <div class='col-sm-4 input-group date' id='Status'>
                        <label type="text" name="Status" class="form-control label-input">
                        @if ($a->Status == 'H')
                            Hadir
                        @elseif ($a->Status == 'A')
                            Tidak Hadir
                        @endif
                        </label>
                    </div>
                </div>
            </div>
		<input type="submit" value="Kembali">
	</form>
	@endforeach

    @endsection
