<html>
<head>
</head>
<body class="parallax">
<?php include_once("analyticstracking.php") ?>
	<?php
		session_start();
		include 'hospitalnav.php';
		include 'conn.php';
		$email_id = (string) $_POST['email_id'];
		$password = (string) $_POST['password'];
		$confirm_password = (string) $_POST['confirm_password'];
		$mobile_number = (string) $_POST['mobile_number'];
		$emergency_no = (string) $_POST['emergency_no'];
		$weight = (string) $_POST['weight'];
		$height = (string) $_POST['height'];
		$blood_group = (string) $_POST['blood_group'];
		
		$aadhaar_id=$_SESSION["aadhaar"];
		
		if($password!=$confirm_password)
		{
			echo "incorrect password <br />";
		}
			$sql="UPDATE `personaldetail` SET `email`='".$email_id."',`password`='".$password."',`mobileno`='".$mobile_number."',`emergencyno`='".$emergency_no."',`weight`='".$weight."',`height`='".$height."',`blood_group`='".$blood_group."' WHERE aadhaar_id = '".$aadhaar_id."'";
			mysql_query($sql);
			echo "<script>
            alert('Successfully Updated!!!');
            </script>";
            echo '<script>window.location="personallogin.php";</script>';
		
	?>
</body>
</html>
