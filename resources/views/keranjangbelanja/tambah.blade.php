@extends('layout.happy')
@section('title', 'Data Belanja')
@section('judulhalaman', 'TAMBAH PEMBELIAN')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
        <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="kodebarang" class="col-sm-2 control-label">Kode Barang :</label>
                    <div class='col-sm-4 input-group date' id='kodebarang'>
		                <input type="text" name="kodebarang" required="required"> <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="jumlah" class="col-sm-2 control-label">Jumlah :</label>
                    <div class='col-sm-4 input-group date' id='jumlah'>
		                <input type="number" name="jumlah" required="required"> <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="tersedia" class="col-sm-2 control-label">Harga :</label>
                    <div class='col-sm-4 input-group date' id='jumlah'>
		                <input type="number" name="harga" required="required"> <br/>
                    </div>
                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data">
    </div>
	</form>
    @endsection
