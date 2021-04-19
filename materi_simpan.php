<!DOCTYPE html>
<html>

<head>
	<title>tambah data</title>
</head>

<body>
	<h1>tambah materi </h1>
	<form method="POST" action="">
		<table cellpadding="8">
			<tr>
				<td>nomor</td>
				<td><input type="text" name="nomor"></td>
			</tr>
			<tr>
				<td>nama materi</td>
				<td><input type="text" name="nama_materi"></td>
			</tr>
			<tr>
				<td>jenis materi</td>
				<td><input type="text" name="jenis_materi"></td>
				</td>
			</tr>
			<tr>
				<td>file</td>
				<td><input type="text" name="file"></td>
			</tr>

		</table>
		<hr>
		<input type="submit" name="submit" value="simpan ">
		<a href="crud.php"><input type="button" value="kembali"></a>
	</form>
	<?php

	include "koneksi.php";

	//proses simpan ke database
	if (isset($_POST['submit'])) {

		$nomor = $_POST['nomor'];
		$nama_materi = $_POST['nama_materi'];
		$jenis_materi = $_POST['jenis_materi'];
		$file = $_POST['file'];

		$result = mysqli_query($conn, "INSERT INTO pemrograman(nomor,nama_materi,jenis_materi,file )VALUES('$nomor','$nama_materi','$jenis_materi','$file')");

		//'id',nomor','nama_materi','jenis_materi','file'
	}


	?>
</body>

</html>