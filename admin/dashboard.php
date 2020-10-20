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
<title>DashBoard Apotek Tenpoles</title>
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
			  
			  <table width="50%" border="0" align="center" class="pad">
				    <tbody align="center">
					    <tr>
						  <td colspan="4">
							  <div id="piechart"></div>
								<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

								<script type="text/javascript">
								// Load google charts
								google.charts.load('current', {'packages':['corechart']});
								google.charts.setOnLoadCallback(drawChart);

								// Draw the chart and set the chart values
								function drawChart() {
								  var data = google.visualization.arrayToDataTable([
								  ['Task', 'Hours per Day'],
								  ['Sangat Puas', 53],
								  ['Puas', 22],
								  ['Cukup Puas', 34],
								  ['Tidak Puas', 12]
								]);

								  // Optional; add a title and set the width and height of the chart
								  var options = {'title':'Kepuasan pada laman', 'width':550, 'height':400};

								  // Display the chart inside the <div> element with id="piechart"
								  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
								  chart.draw(data, options);
								}
								</script>
							</td>
					  </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
						<td>&nbsp;</td>
					  </tr>
					  <tr>
					    <td><img src="../img/like.png" width="100" height="100" alt=""/></td>
					    <td><img src="../img/Awards.png" width="100" height="150" alt=""/></td>
					    <td><img src="../img/halal.png" width="100" height="100" alt=""/></td>
						  <td><img src="../img/bpom.png" width="100" height="100" alt=""/></td>
					  </tr>
					  <tr>
					    <td><h4><b>Terpercaya</b></h4></td>
					    <td><h4><b>Terbaik</b></h4></td>
					    <td><h4><b>Halal</b></h4></td>
						 <td><h4><b>Terjamin</b></h4></td>
					  </tr>
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
