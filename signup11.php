<!Doctype html>
<?php include_once("analyticstracking.php") ?>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });</script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
	<title>SandM Signup</title>
</head>
<body>
	
	<div id="shippermodal" class="modal">
		<div class="modal-content">
			<center><h4>Shipper Registration</h4></center>
			<div class="row">
			<form action="regi.php" class="col s12" method="post">
				<div class="row">
					<div class="input-field col s6">
						<input name="name" type="text" class="validate" required>
						<label for="name">Name</label>
					</div>
					<div class="input-field col s6">
						<input name="email" type="email" class="validate" required>
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input name="pass" type="password" class="validate" maxlenth="12" minlength="6" required>
						<label for="password">Password</label>
					</div>
					<div class="input-field col s6">
						<input name="phone" type="tel" class="validate" maxlength="10" minlength="10" "off" pattern='^\d{5}\d{5}$' required>
						<label for="phone">Mobile No.</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<textarea name="address" class="materialize-textarea" required></textarea>
						<label for="address">Address</label>
					</div>
					<div class="input-field col s6">
						<input name="aadhar" type="tel" class="validate" maxlength="12" minlength="12" required>
						<label for="aadhar">Aadhar Number</label>
					</div>
				</div>
				<center><div class="row">	
					<div class="input-field col s12">
						<button class="btn waves-effect waves-light" name="usertype" value="shipper" type="submit">Submit
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div></center>
			</form>
			</div>
		</div>
		<div class="modal-footer">
		  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
		</div>
    </div>
	
	<div id="movermodal" class="modal">
		<div class="modal-content">
			<center><h4>Mover Registration</h4></center>
			<div class="row">
			<form action="regi.php" class="col s12" method="post">
				<div class="row">
					<div class="input-field col s6">
						<input name="name" type="text" class="validate" required>
						<label for="name">Name</label>
					</div>
					<div class="input-field col s6">
						<input name="email" type="email" class="validate" required>
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input name="pass" type="password" class="validate" maxlenth="12" minlength="6" required>
						<label for="password">Password</label>
					</div>
					<div class="input-field col s6">
						<input name="phone" type="tel" class="validate" maxlength="10" minlength="10" "off" pattern='^\d{5}\d{5}$' required>
						<label for="phone">Mobile No.</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<textarea name="address" class="materialize-textarea" required></textarea>
						<label for="address">Address</label>
					</div>
					<div class="input-field col s6">
						<input name="aadhar" type="tel" class="validate" maxlength="12" minlength="12" required>
						<label for="aadhar">Aadhar Number</label>
					</div>
				</div>
				<div class="row">	
					<div class="input-field col s6">
						<input name="tin" type="tel" class="validate" maxlength="12" minlength="12" required>
						<label for="tin">Tin Number</label>
					</div>
					<div class="input-field col s6">
						<center><button class="btn waves-effect waves-light" name="usertype" value="mover" type="submit">Submit
							<i class="material-icons right">send</i>
						</button></center>
					</div>
				</div>
			</form>
			</div>
		</div>
		<div class="modal-footer">
		  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
		</div>
    </div>
	
	<div id="drivermodal" class="modal">
		<div class="modal-content">
			<center><h4>Driver Registration</h4></center>
			<div class="row">
			<form action="regi.php" class="col s12" method="post">
				<div class="row">
					<div class="input-field col s6">
						<input name="name" type="text" class="validate" required>
						<label for="name">Name</label>
					</div>
					<div class="input-field col s6">
						<input name="phone" type="tel" class="validate" maxlength="10" minlength="10" "off" pattern='^\d{5}\d{5}$' required>
						<label for="phone">Mobile No.</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<textarea name="address" class="materialize-textarea" required></textarea>
						<label for="address">Address</label>
					</div>
					<div class="input-field col s6">
						<input name="aadhar" type="tel" class="validate" maxlength="12" minlength="12" required>
						<label for="aadhar">Aadhar Number</label>
					</div>
				</div>
				<div class="row">	
					<div class="input-field col s6">
						<input name="tin" type="tel" class="validate" maxlength="12" minlength="12" required>
						<label for="tin">Tin Number</label>
					</div>
					<div class="input-field col s6">
						<input name="license" type="text" class="validate" required maxlength="16" minlength="16">
						<label for="license">License Number</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<center><button class="btn waves-effect waves-light" name="usertype" value="driver" type="submit">Submit
							<i class="material-icons right">send</i>
						</button></center>
					</div>
				</div>
			</form>
			</div>
		</div>
		<div class="modal-footer">
		  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
		</div>
    </div>
	
	
	<nav>
		<div class="nav-wrapper">
		  <a href="index.php" class="brand-logo">Shippers and Movers</a>
		  <ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="index.php#Features"><i class="material-icons left">verified_user</i>Features</a></li>
			<li><a href="index.php#Team"><i class="material-icons left">perm_identity</i>Team</a></li>
			<li><a href="signup.php"><i class="material-icons left">recent_actors</i>Signup</a></li>
			<li><a href="login.php"><i class="material-icons left">input</i>Login</a></li>
		  </ul>
		</div>
	</nav>
	
	<br />
	
	<div class="row">
		<div class="col s4 m4">
			<div class="card" style="box-shadow:5px 5px 3px grey;">
				<div class="card-image">
					<img src="images/shippers.jpg" alt="" height="318">
				</div>
				<div class="card-content">
						<center><a class="waves-effect waves-light btn" href="#shippermodal">Register</a></center>
				</div>
			</div>
		</div>
		<div class="col s4 m4">
			<div class="card" style="box-shadow:5px 5px 3px grey;">
				<div class="card-image">
					<img src="images/movers.jpg" alt="" height="318">
				</div>
				<div class="card-content">
					<center><a class="waves-effect waves-light btn" href="#movermodal">Register</a></center>
				</div>
			</div>
		</div>
		<div class="col s4 m4">
		  <div class="card" style="box-shadow:5px 5px 3px grey;">
			<div class="card-image">
				<img src="images/driver.jpg" alt="" height="318">
			</div>
			<div class="card-content">
				<center><a class="waves-effect waves-light btn" href="#drivermodal">Register</a></center>
			</div>
		  </div>
		</div>
	</div>
	
	<br />
	<footer class="page-footer">
		<div class="footer-copyright">
            <div class="container">
				<center><h5>© 2017 Shippers & Movers Designed by: @nirudh</h5></center>
			</div>
        </div>
    </footer>
</body>
</html>