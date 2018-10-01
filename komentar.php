<!DOCTYPE html>
<html>
<head>
	<title>Komentar</title>
</head>
<body>
	<center><h1>KOMENTAR</h1></center>
	<form method="POST">
		Nama : <input type="text" name="nama" maxlength="25" required=""><br><br>
		<textarea name="komentar" cols="30" rows="10"></textarea><br><br>
		<input type="submit" name="submit">
	</form>
	<?php 
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$komentar = $_POST['komentar'];

		$count = explode(" ", $komentar);
		if (count($count) < 5) {
			echo "Jumlah kata di komentar tidak sampai 5 kata";
		} else {
			echo "jumlah kata di komentar ada : ". count($count)." kata";
		}
	}
 	?>
</body>
</html>
