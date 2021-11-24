<!DOCTYPE html>
<html>
<head>
	<title>Tambah Tugas</title>
</head>
<body>

	<h2>Tambah Tugas</a></h2>
	<h3>Tabel Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="date" name="Tanggal" required="required"> <br/>
		NamaTugas <input type="text" name="NamaTugas" required="required"> <br/>
		Status <input type="text" name="Status" required="required" maxlength="1"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
