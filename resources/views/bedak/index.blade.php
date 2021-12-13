@extends('layout.happy')
@section('title', 'Data Bedak')
@section('judulhalaman', 'DATA Bedak')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')

	<a href="/bedak/tambah"> + Tambah Bedak Baru</a>

	<br/>
	<br/>


	<table class="table table-hover table-bordered table-sm">
          <thead class="table-dark table-responsive">
			<th>Merk</th>
			<th>Stok</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</thead>
		@foreach($bedak as $p)
		<tbody>
			<td>{{ $p->merkbedak }}</td>
			<td>{{ $p->stockbedak }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
				<a href="/bedak/edit/{{ $p->kodebedak }}">Edit</a>
				|
				<a href="/bedak/hapus/{{ $p->kodebedak }}">Hapus</a>
			</td>
		</tbody>
		@endforeach
	</table>

    Halaman : {{ $bedak->currentPage() }}<br/>
	Jumlah Data : {{ $bedak->total() }}<br/>
	Data Per Halaman : {{ $bedak->perPage() }}<br/>


	{{ $bedak->links() }}
 @endsection

