@extends('layout.happy')
@section('title', 'Data Belanja')
@section('judulhalaman', 'KERANJANG BELANJA')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')

<a href="/keranjangbelanja/tambah" class="btn btn-success"> Beli</a>

    <br/>
    <br/>

	<table class="table table-hover table-bordered table-sm">
          <thead class="table-dark table-responsive">
            <th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
			<th>Total</th>
            <th>Action</th>
		</thead>
		@foreach($keranjangbelanja as $p)
		<tbody>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
            <td>
                Rp.
                @php
                    echo number_format($p->Harga, 0, '.', '.')
                @endphp
               </td>
            <td>Rp.
                @php
                    echo number_format($p->Harga * $p->Jumlah, 0, '.', '.')
                @endphp
            </td>
			<td>


				<a class="btn btn-danger"href="/keranjangbelanja/hapus/{{ $p->ID }}">Batal</a>
			</td>
		</tbody>
		@endforeach
	</table>

    Halaman : {{ $keranjangbelanja->currentPage() }}<br/>
	Jumlah Data : {{ $keranjangbelanja->total() }}<br/>
	Data Per Halaman : {{ $keranjangbelanja->perPage() }}<br/>


	{{ $keranjangbelanja->links() }}
 @endsection

