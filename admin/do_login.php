<?php
	include "koneksi.php";
	$username = $_POST['username'];
	$password = $_POST['password'];

	
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;

	$query = "select * from apoteker where username ='$username' and password ='$password'";
	$result = mysqli_query($connect, $query);
	$cek = mysqli_num_rows($result);

	if($cek > 0){
		header("location:dashboard.php");
	}else{
		echo mysqli_error($connect);
		echo "Maaf, username dan password Anda salah. Silahkan ";
		echo "<a href='index.html'>Login</a>Kembali.";
	}
?>