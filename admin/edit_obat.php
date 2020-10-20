<?php
session_start();
include"koneksi.php";

if(!isset($_SESSION['username']))
{
?>
<script type="text/javascript" language="javascript">
  alert("Maaf, Anda harus login dulu!!");
  document.location("index.html");
</script>
<?php
exit;
}
?>
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
			<a href="dashboard.php" class="bar-item buttonItem">Dashboard</a>
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
			  <table width="70%" border="0">
  			  	<tbody>
					<tr>
					  <td><a href="obat.php">Kembali</a></td>
					</tr>
				  </tbody>
				</table>
			  <br><br>
			  
			  <form id="form1" name="form1" method="post" action="do_edit_obat.php">
				  <?php
				  	$server = "localhost";
					$user = "root";
					$password = "";
					$db = "apotek";
					$con = mysqli_connect($server, $user, $password, $db);
					
				  	$id = $_GET['id'];
					$query = mysqli_query($con, "select * from obat where id_obat='$id'");
				  	$data = mysqli_fetch_array($query);
				  ?>
				  <table width="70%" border="1" align="center" class="table-sm table-light">
				  <tbody>
					<tr>
					  <th colspan="3" scope="row"><h3 align="center">Edit Obat</h3></th>
				    </tr>
					<tr>
					  <th scope="row">ID Obat</th>
					  <td>:</td>
					  <td><input name="id_obat" type="text" id="id_obat" size="5" value="<?php echo "$data[0]"; ?>" readonly="true"></td>
					</tr>
					<tr>
					  <th scope="row">Nama</th>
					  <td>:</td>
					  <td><input name="nama" type="text" id="nama" size="20" value="<?php echo "$data[1]"; ?>"></td>
					</tr>
					<tr>
					  <th scope="row">Harga</th>
					  <td>:</td>
					  <td><input name="harga" type="text" id="harga" size="20" value="<?php echo "$data[2]"; ?>"></td>
					</tr>
					<tr>
					  <th scope="row">Stok</th>
					  <td>:</td>
					  <td><input name="stock" type="number" id="stock" size="5" value="<?php echo "$data[3]"; ?>"></td>
					</tr>
					<tr>
					  <th scope="row">Jenis</th>
					  <td>:</td>
					  <td><input name="jenis" type="text" id="jenis" size="20" value="<?php echo "$data[4]"; ?>"></td>
					</tr>
					<tr>
					  <th scope="row">&nbsp;</th>
					  <td>&nbsp;</td>
					  <td><input type="submit" name="submit" id="submit" value="Edit" class="bg-secondary">
				      <input type="reset" name="reset" id="reset" value="Reset" class="bg-secondary"></td>
				    </tr>
				  </tbody>
				</table>
		    </form>
			<br><br>
			  <br><br><br><br>
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
