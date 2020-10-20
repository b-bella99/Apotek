<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "apotek";
	$con = new mysqli($server, $user, $password, $db);

	$username = $_POST['username'];
	$password = $_POST['password'];	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['JK'];

	$sql ="insert into pelanggan values ('$nama', '$username', '$password', '$ttl', '$jk', '$alamat')";

	if(mysqli_query($con, $sql)){
		header("location:login.html");
	}else{
		echo "Maaf data gagal dimasukkan, silahkan";
		echo"<a href='signup.html'> masukkan</a> kembali";
	}
?>