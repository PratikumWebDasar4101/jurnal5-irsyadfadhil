<?php
session_start();
if (isset($_POST['submit'])) {
 	$nim = isset($_POST['nim']) ? $_POST['nim'] : "";
 	$nama = isset($_POST['nama']) ? $_POST['nama'] : "";
 	$email = isset($_POST['email']) ? $_POST['email'] : "";
 }
 echo "<center><h1>HASIL FORM REGISTRASI</h1></center>";
 echo "NIM : ".$nim;
 echo "<br>";
 echo "<br>";
 echo "Nama : ".$nama;
 echo "<br>";
 echo "<br>";
 echo "Email : ".$email;
 ?>
