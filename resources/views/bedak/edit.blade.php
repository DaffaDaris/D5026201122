@extends('layout.happy')
@section('title', 'Data Bedak')
@section('judulhalaman', 'EDIT BEDAK')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')

	<a href="/bedak"> Kembali</a>

	<br/>
	<br/>

	@foreach($bedak as $p)
	<form action="/bedak/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodebedak }}"> <br/>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="merkbedak" class="col-sm-2 control-label">Merk Bedak :</label>
                    <div class='col-sm-4 input-group date' id='merkbedak'>
		                <input type="text" required="required" name="merk" value="{{ $p->merkbedak }}"> <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="stockbedak" class="col-sm-2 control-label">Stok :</label>
                    <div class='col-sm-4 input-group date' id='stockbedak'>
		                <input type="number" required="required" name="stok" value="{{ $p->stockbedak }}"> <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="tersedia" class="col-sm-2 control-label">Tersedia :</label>
                    <div class='col-sm-4 input-group date' id='Status'>
                        <input type="radio" id="Y" name="tersedia" value="Y" @if($p->tersedia==='Y') checked="checked" @endif>
                        <label for="Y">Tersedia</label>
                        <input type="radio" id="G" name="tersedia" value="G"  @if($p->tersedia==='G') checked="checked" @endif>
                        <label for="G">Tidak Tersedia</label><br>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach
    @endsection
