<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "apotek";
	$con =new mysqli($server, $user, $password, $db);

	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$stok = $_POST['stock'];
	$jenis = $_POST['jenis'];

	$sql ="delete from obat where id_obat = '$id'";

	if(mysqli_query($con, $sql)){
		echo "Data berhasil dihapus";
		header("location:obat.php");
	}else{
		echo "Maaf data gagal dihapus, silahkan ke ";
		echo"<a href='obat.php'> Tabel Obat</a> kembali";
	}
?>