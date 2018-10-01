 <!DOCTYPE html>
 <html>
 <head>
 	<title>Registrasi</title>
 </head>
 <body>
 	<center><h1>FORM REGISTRASI</h1></center>
 	<form action="prosesregis.php" method="POST">
 		NIM : <input type="text" name="nim" pattern="\d*" minlength="10" maxlength="10" title="Inputkan angka 10 digit" required><br><br>
 		Nama : <input type="text" name="nama" minlength="3" maxlength="25" title="Inputkan karakter minimal 3 maksimal 10" required><br><br>
 		Email : <input type="email" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com" title="Inputkan email anda"required><br><br>
 		<input type="submit" name="submit">
 	</form>
 </body>
 </html>
