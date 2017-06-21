<html>
<head>
<title>Medix</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<script>
	$(document).ready(function() {
    Materialize.updateTextFields();
	});
</script>
</head>
<?php include 'personalnav.php';
		session_start();
	$a = $_SESSION["aadhaar"];?>
	<body class="parallax">
<?php include_once("analyticstracking.php") ?>
	<div style="padding:20px;"/>
		<div class="container" style="background:white; padding:20px 0px 0px 20px;">
		<h4><center>Update Details</center></h4>
			<form action="personalafterupdatedetail.php" method="post">
				<div class="row">
					
					<div class="input-field col s10">
						<i class="material-icons prefix">contacts</i>
						<input type="email" onclick="this.placeholder = 'Mygoogle@email.com'" onfocusout="this.placeholder = ''" required name="email_id">
						<label>Email ID</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
					<i class="material-icons prefix">subtitles</i>
						<input type="password" required name="password">
						<label>Password</label>
					</div>
					<div class="input-field col s5">
						<i class="material-icons prefix">subtitles</i>
						<input type="password" required name="confirm_password">
						<label>Confirm Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">dialpad</i>
						<input type="number" onclick="this.placeholder = 'XXXXXXXXXXXX'" onfocusout="this.placeholder = ''" required name="mobile_number">
						<label>Mobile Number</label>
					</div>
					<div class="input-field col s5">
						<i class="material-icons prefix">comment</i>
						<input  type="number" onclick="this.placeholder = 'XXXXXXXXXXXX'" onfocusout="this.placeholder = ''" required name="emergency_no">
						<label>Emergency Contact Number</label>	
					</div>
				</div>
				<div class="row">
					<div class="input-field col s3">
						<i class="material-icons prefix">comment</i>
						<input  type="number" onclick="this.placeholder = 'In Kilograms'" onfocusout="this.placeholder = ''" required name="weight">
						<label>Weight</label>
					</div>
					<div class="input-field col s3">
						<i class="material-icons prefix">assessment</i>
						<input  type="number" onclick="this.placeholder = 'In Centimeters'" onfocusout="this.placeholder = ''" required name="height">
						<label>Height</label>
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">loyalty</i>
						<input  type="text" onclick="this.placeholder = 'A/B/o/AB|+/-'" onfocusout="this.placeholder = ''" required name="blood_group">
						<label>Blood Group</label>
					</div>
				</div>
				<center><button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button><center>
			</form>
			<br />
		</div>
		<script>
		$(document).ready(function() {
			Materialize.updateTextFields();
		});
	</script>
	</body>
</html>
