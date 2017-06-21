<html>
<head>
<title>Medix</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style>
td:hover
{
	background:#607d8b;
	
}
span:hover
{
	color:#01579b;
}
span
{
	color:#81d4fa;
}
</style>
</head>
<?php include 'nav.php';?>
<body class="parallax">   
<?php include_once("analyticstracking.php") ?>
	<div style="padding:120px;"/>
	<div class="container" style="opacity:0.75">
		
		<table style="height:50%">
		<tr>	
			<td class="card-panel hoverable" style="height:33%">
			<a href="personallogin.php">
				<font size="5"><center><span>Personal</span></center></font>
			</a>
		</td>
		
			<td class="card-panel hoverable" style="height:33%">
				<a href="hospitallogin.php">
					<font size="5"><center><span>Hospital</span></center></font>
				</a>
			</td>
			</td>
			<td class="card-panel hoverable" style="height:33%">
				<a href="doctorlogin.php">
					<font size="5"><center><span>Doctor</span></center></font>
				</a>
			</td>
		</tr>
		</table>
	</div>
	</div>
</body>
</html>
