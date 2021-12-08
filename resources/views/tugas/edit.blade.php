@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'EDIT DATA TUGAS')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $t->ID }}">
    <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                    <div class='col-sm-4 input-group date custom-select' id='nama'>
                        <select class="form-control" name="idpegawai">
                            @foreach($pegawai as $p )
                                 <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$t->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
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
                        <input type='text' class="form-control" name="Tanggal" required="required" value="{{ $t->Tanggal }}" />
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
                    <label for="namatugas" class="col-sm-2 control-label">Nama Tugas :</label>
                    <div class='col-sm-4 input-group date' id='namatugas'>
                        <input type="text" required="required" name="umur" value="{{ $t->NamaTugas }}"> <br/>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="Status" class="col-sm-2 control-label"> Status :</label>
                    <div class='col-sm-4 input-group date' id='Status'>
                        <input type="radio" id="S" name="Status" value="S" @if($t->Status==='S') checked="checked" @endif>
                        <label for="S">Selesai</label>
                        <input type="radio" id="B" name="Status" value="B"  @if($t->Status==='B') checked="checked" @endif>
                        <label for="B">Belum Selesai</label><br>
                    </div>
                </div>
            </div>
        </div>

		<input type="submit" value="Simpan Data">
    </div>



	</form>
	@endforeach

    @endsection
