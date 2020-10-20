<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "apotek";
	$con =new mysqli($server, $user, $password, $db);

	$id_obat = $_POST['id_obat'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$stok = $_POST['stock'];
	$jenis = $_POST['jenis'];

	$sql ="update obat set nama = '$nama', harga = '$harga', stock = '$stok', jenis = '$jenis' where id_obat = '$id_obat'";

	if(mysqli_query($con, $sql)){
		echo "Data berhasil dirubah";
		header("location:obat.php");
	}else{
		echo "Maaf data gagal dirubah, silahkan";
		echo"<a href='obat.php'> rubah</a> kembali";
	}
?>