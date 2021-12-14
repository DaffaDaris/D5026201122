@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'DATA ABSEN')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
    <p>Cari @yield('title') :</p>
    <div class="search">
            <form action="/absen/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}" >
                <input type="submit" value="Cari">
            </form>
    </div>
	<br/>

	<table class="table table-hover table-bordered table-sm">
		<thead class="table-dark table-responsive">
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
        </thead>
		@foreach($absen as $a)
		<tbody>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>
                @if ($a->Status == 'H')
                    Hadir
                @elseif ($a->Status == 'A')
                    Tidak Hadir
                @endif
            </td>
			<td>
                <a href="/absen/detail/{{ $a->ID }}">Details</a>
                |
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tbody>
		@endforeach
	</table>
    Halaman : {{ $absen->currentPage() }}<br/>
	Jumlah Data : {{ $absen->total() }}<br/>
	Data Per Halaman : {{ $absen->perPage() }}<br/>

	{{ $absen->links() }}

@endsection
