<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
</head>
<body>

	<h2>Tugas</h2>
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="date" required="required" name="Tanggal" value="{{ $t->Tanggal }}"> <br/>
		NamaTugas <input type="text" required="required" name="NamaTugas" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="text" required="required" name="Status" maxlength="1"value="{{ $t->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
