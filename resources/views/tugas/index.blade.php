@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'DATA TUGAS')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')

	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table class="table table-hover table-bordered table-sm">
        <thead class="table-dark table-responsive">
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</thead>
		@foreach($tugas as $t)
		<tbody>
			<td>{{ $t->IDPegawai}}</td>
			<td>{{ $t->Tanggal }}</td>
			<td>{{ $t->NamaTugas}}</td>
            <td>{{ $t->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
			</td>
		</tbody>
		@endforeach
	</table>


@endsection
