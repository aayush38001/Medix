<html>
<head>
<title>Medix</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<?php include_once("analyticstracking.php") ?>
<?php include 'nav.php';?>
	<body class="parallax">
		<div style="padding:20px;"/>
		<div class="container" style="opacity:0.86; background:white; padding:20px 0px 0px 20px;">
		<h4><center>Hospital Login</center></h4>
			<form action="hospitallogged.php" method="post">
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">credit_card</i>
						<input  type="Email" onclick="this.placeholder = 'Myemail@email.com'" onfocusout="this.placeholder = ''" required name="login_email_id" />
						<label>Email ID</label>
					</div>
					
				</div>
				<div class="row">	
					<div class="input-field col s5">
						<i class="material-icons prefix">subtitles</i>
						<input type="password" required name="login_password"/>
						<label>Password</label>
					</div>
				</div>
				<center><button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button><center>
			</form>
			<br />
		</div>
	<?PHP include 'scripts.php';?>
	</body>
</html>
