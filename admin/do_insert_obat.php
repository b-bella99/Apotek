<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "apotek";
	$con =new mysqli($server, $user, $password, $db);

	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$stok = $_POST['stock'];
	$jenis = $_POST['jenis'];

	$sql ="insert into obat (nama, harga, stock, jenis) values ('$nama', '$harga', '$stok', '$jenis')";

	if(mysqli_query($con, $sql)){
		echo "Data berhasil ditambahkan";
		header("location:obat.php");
	}else{
		echo "Maaf data gagal dimasukkan, silahkan";
		echo"<a href='tambah_obat.php'> masukkan</a> kembali";
	}
?>