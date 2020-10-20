<?php
	include "koneksi.php";
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "select * from pelanggan where username ='$username' and password ='$password'";
	$result = mysqli_query($connect, $query);
	$cek = mysqli_num_rows($result);

	if($cek > 0){
		header("location:dashboard.html");
	}else{
		echo mysqli_error($connect);
	}
?>