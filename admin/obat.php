<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Obat Apotek Tenpoles</title>
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
</head>

<body>
<header>
		<nav id="webBrand" class="navbar navbar-dark bg-primary">
		<a class="navbar-brand" href="#"><h3 align="center">
			<font style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'">Apotek Tenpoles</font></h3></a>
	</nav>
</header>
	
	<article>
		<div class="sidebar bar-block bg-light" style="25%">
			<br><img src="../img/logo.png" width="100px" height="100px" alt="" class="bg"><br><br>
			<a href="dashboard.html" class="bar-item buttonItem">Dashboard</a>
			<a href="obat.php" class="bar-item buttonItem">Obat</a>
			<a href="pelanggan.php" class="bar-item buttonItem">Pelanggan</a>
			<a href="logout.php" class="bar-item buttonItem">Logout</a>
		</div>

		<div class="container-fluid">
		  <div class="container">
				<font style="font-family: 'Alex Brush'">
					<h3 align="center"><br>Apotek Tenpoles</h3>
				</font>
			  <br><br>
			  
			  <br><br>
			  <table width="70%" border="0">
  			  	<tbody>
					<tr>
					  <td><a href="tambah_obat.php">Tambah Data Obat</a></td>
					</tr>
				  </tbody>
				</table>
			  <br><br>
			  
			  <table width="70%" border="1" align="center" class="table-striped">
				  <tbody align="center">
					<tr>
					  <td colspan="6"><h3><strong>Tabel Obat</strong></h3></td>
				    </tr>
					<tr>
					  <th>ID Obat</th>
					  <th>Nama</th>
					  <th>Harga</th>
					  <th>Stok</th>
					  <th>Jenis</th>
					  <td>Action</td>
					</tr>
					<?php
					$server = "localhost";
					$user = "root";
					$password = "";
					$db = "apotek";
					$con = mysqli_connect($server, $user, $password, $db);
					
					$query = mysqli_query($con, "select * from obat");
					if(mysqli_num_rows($query) > 0){
						$no = 1;
						while($data = mysqli_fetch_array($query)){
							?>
					  <tr>
						  <td><?php echo "$data[0]"; ?></td>
						  <td><?php echo "$data[1]"; ?></td>
						  <td><?php echo "$data[2]"; ?></td>
						  <td><?php echo "$data[3]"; ?></td>
						  <td><?php echo "$data[4]"; ?></td>
						  <td><a href='edit_obat.php?id=<?php echo $data[0]; ?>'>Edit</a> | <a href='do_delete_obat.php?id=<?php echo $data[0]; ?>'>Hapus</a></td>
					  </tr>
						<?php  $no++;}?>
					  <?php
					}
					?>
				  </tbody>
				</table>
			  

			  <br><br>
			</div>
		</div>
	</article>
	
	<footer>
		<nav id="footer" class="navbar navbar-dark bg-primary fixed-bottom">
		<a class="navbar-dark" href="dashboard.html">
			<font style="font-size: 5" color="white">CopyRight &copy; 2019. Apotek Tenpoles. All Right Reserved</font></a>
		</nav>
	</footer>
</body>
</html>
