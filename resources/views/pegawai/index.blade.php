@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DATA PEGAWAI')

@section('bootstrap')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection

@section('konten')

<div class="container">

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br>
    <p>Cari @yield('title') :</p>
    <div class="search">
            <form action="/pegawai/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}" >
                <input type="submit" value="Cari">
            </form>
    </div>
    <br>


	<table class="table table-hover table-bordered table-sm">
          <thead class="table-dark table-responsive">
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</thead>
		@foreach($pegawai as $p)
		<tbody>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}">Details</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tbody>
		@endforeach
	</table>

    Halaman : {{ $pegawai->currentPage() }}<br/>
	Jumlah Data : {{ $pegawai->total() }}<br/>
	Data Per Halaman : {{ $pegawai->perPage() }}<br/>

	{{ $pegawai->links() }}
</div>
 @endsection

