<html>
<head>
<title>Medix</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<?php include 'nav.php';?>
	<body class="parallax">
	<?php include_once("analyticstracking.php") ?>
		<div style="padding:20px;"/>
		<div class="container" style="opacity:0.86;background:white; padding:20px 0px 0px 20px;">
		<h4><center>Doctor Login</center></h4>
			<form action="doctorlogged.php" method="post">
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">credit_card</i>
						<input type="email" onclick="this.placeholder = 'Myemail@email.com'" onfocusout="this.placeholder = ''" required name="doctor_email_id" >
						<label>Email Id</label>	
					</div>
				</div>
				<div class="row">	
					<div class="input-field col s5">
						<i class="material-icons prefix">subtitles</i>
						<input type="password" required name="doctor_password" />
						<label>Password</label>
					</div>
				</div>
				<center><button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button><center>
			</form>
			<br />
		</div>
	</body>
</html>
