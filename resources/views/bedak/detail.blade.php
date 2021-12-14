@extends('layout.happy')
@section('title', 'Data Bedak')
@section('judulhalaman', 'DETAIL BEDAK')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')
@foreach($bedak as $p)
    <div class="container">Detail dari {{ $p->merkbedak }}</div>
@endforeach
	<br/>
	<br/>

	@foreach($bedak as $p)
	<form action="/bedak" method="get">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodebedak }}"> <br/>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="merkbedak" class="col-sm-2 control-label">Merk Bedak :</label>
                    <div class='col-sm-4 input-group date' id='merkbedak'>
		                <label type="text" class="form-control label-input" name="merk" >{{ $p->merkbedak }}</label><br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="stockbedak" class="col-sm-2 control-label">Stok :</label>
                    <div class='col-sm-4 input-group date' id='stockbedak'>
		                <label type="number" class="form-control label-input" name="stok" >{{ $p->stockbedak }} </label><br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="tersedia" class="col-sm-2 control-label">Tersedia :</label>
                    <div class='col-sm-4 input-group date' id='Status'>
                        <label type="text" name="Status" class="form-control label-input">
                            @if ($p->tersedia == 'Y')
                                Tersedia
                            @elseif ($p->tersedia == 'G')
                                Tidak Tersedia
                            @endif
                            </label>
                    </div>
                </div>
            </div>
        <input type="submit" value="Kembali">
	</form>
	@endforeach
    @endsection
