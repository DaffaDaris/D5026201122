@extends('layout.happy')
@section('title', 'Data Bedak')
@section('judulhalaman', 'TAMBAH BEDAK')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')

	<a href="/bedak"> Kembali</a>

	<br/>
	<br/>

	<form action="/bedak/store" method="post">
		{{ csrf_field() }}
        <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="merkbedak" class="col-sm-2 control-label">Merk Bedak :</label>
                    <div class='col-sm-4 input-group date' id='merkbedak'>
		                <input type="text" name="merk" required="required"> <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="stockbedak" class="col-sm-2 control-label">Stok :</label>
                    <div class='col-sm-4 input-group date' id='stockbedak'>
		                <input type="number" name="stok" required="required"> <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="tersedia" class="col-sm-2 control-label">Stok :</label>
                    <div class='col-sm-4 input-group date' id='tersedia'>
                        <input type="radio" id="S" name="tersedia" value="Y">
                        <label for="Y">Tersedia</label>
                        <input type="radio" id="B" name="tersedia" value="G" checked="checked">
                        <label for="G">Tidak Tersedia</label><br>
                    </div>
                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data">
    </div>
	</form>
    @endsection
