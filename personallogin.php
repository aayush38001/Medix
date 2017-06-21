<html>
<head>
<title>Medix</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style>
</style>
</head>
<?php include 'nav.php';?>
<body class="parallax">	
<?php include_once("analyticstracking.php") ?>
	<div style="padding:20px;"/>
		<div class="container" style="opacity:0.86; background:white; padding:20px 0px 0px 20px; ">
		<h4><center>User Login</center></h4>
			<form action="personallogged.php" method="post">
			<div class="row">
				<div class="col s4">	
				</div>
				<div class="col s8">
					<div class="row">
						<div class="input-field col s10">
							<i class="material-icons prefix">credit_card</i>
							<input type="number" onclick="this.placeholder = 'XXXX XXXX XXXX'" onfocusout="this.placeholder = ''" required name="aadhaar_id" >
							<label>Aadhaar Card</label>	
						</div>
					</div>
					<div class="row">	
						<div class="input-field col s10">
							<i class="material-icons prefix">subtitles</i>
							<input type="password" required name="password" />
							<label>Password</label>
						</div>
					</div>
				</div>
				
			</div>
				<center><button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button><center>
			</form>
			<br />
		</div>
		</div>
	</body>
</html>
