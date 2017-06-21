<html>
<head>
<title>Medix</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</head>
<?php include 'nav.php';?>
<body class="parallax">   	
	<?php
		//mysql_connect('localhost','root','');
		//mysql_select_db('medix');
		$aadhaar_id = (integer) $GET['aadhaar_id'];
		$email_id = (string) $_GET['email_id'];
		$password = (string) $_GET['password'];
		$confirmpassowrd = (string) $_GET['confirm_password'];
		echo $aadhaar_id;
		echo $email_id;
		echo $password;
		echo $confirmpassowrd;
	?>
</body>
</html>
