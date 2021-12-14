@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'EDIT DATA TUGAS')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')
@foreach($tugas as $t)
    <div class="container">Detail dari {{ $t->pegawai_nama }}</div>
@endforeach
    <br>
    <br>

	@foreach($tugas as $t)
	<form action="/tugas" method="get">
		{{ csrf_field() }}
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="pegawai_nama" class="col-sm-2 control-label">ID Pegawai :</label>
                    <div class='col-sm-4 input-group date' id='pegawai_nama'>
		            <label type="text" class="form-control label-input" name="ID">{{ $t->ID }}</label><br/>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                    <div class='col-sm-4 input-group date custom-select' id='nama'>
                         <label type="text" class="form-control label-input" name="nama"> {{ $t->pegawai_nama }}</label>
                    </div>
                </div>
            </div>
        </div>
		<div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                        <label type='text' class="form-control label-input" name="Tanggal" >{{ $t->Tanggal }}</label>
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
                    <label for="namatugas" class="col-sm-2 control-label">Nama Tugas :</label>
                    <div class='col-sm-4 input-group date' id='namatugas'>
                        <label type="text" class="form-control label-input" name="umur" >{{ $t->NamaTugas }}</label><br/>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="Status" class="col-sm-2 control-label"> Status :</label>
                    <div class='col-sm-4 input-group date' id='Status'>
                    <label type="text" name="Status" class="form-control label-input">
                        @if ($t->Status == 'S')
                            Selesai
                        @elseif ($t->Status == 'B')
                            Belum Selesai
                        @endif
                    </label>
                    </div>
                </div>
            </div>

		<input type="submit" value="Kembali">



	</form>
	@endforeach

    @endsection
