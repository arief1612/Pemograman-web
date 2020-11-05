<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form 
$nama = $_POST["nama"];
$email = $_POST["email"];
$pesan = $_POST["pesan"];

//Query input menginput data kedalam 
  $mysqli="insert into pendapat(nama,email,pesan) values
		('$nama','$email','$pesan')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$mysqli);

//Kondisi apakah berhasil satau tidak
  if ($hasil) {
	echo "Berhasil insert data";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>