<html>
<head>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
	<?php
		mysql_connect('localhost','root','');
		mysql_select_db('medix');
		//$con=mysqli_connect("sql203.byethost7.com","b7_19718562","anshulmittal","b7_19718562_medix");
		/*if ($con->connect_error) {
				die("Connection failed: " . $con->connect_error);
		}	 
			echo "Connected successfully";*/
		$aadhaar_id = (string) $_POST['aadhaar_id'];
		$email_id = (string) $_POST['email_id'];
		$password = (string) $_POST['password'];
		$confirm_password = (string) $_POST['confirm_password'];
		$mobile_number = (string) $_POST['mobile_number'];
		$emergency_no = (string) $_POST['emergency_no'];
		$weight = (string) $_POST['weight'];
		$height = (string) $_POST['height'];
		$blood_group = (string) $_POST['blood_group'];
		echo $aadhaar_id."<br />";
		echo $email_id."<br />";
		echo $password."<br />";
		echo $confirm_password."<br />";
		echo $mobile_number."<br />";
		echo $emergency_no."<br />";
		echo $weight."<br />";
		echo $height."<br />";
		echo $blood_group."<br />";
		if($password!=$confirm_password)
		{
			echo "incorrect password <br />";
		}
		$str="SELECT * FROM aadhaar WHERE aadhaar_id = '".$aadhaar_id."'";
		$records = mysql_query($str);
		while($row = mysql_fetch_array($records))
		{
			$base_aadhaar=$row['aadhaar_id'];
			$base_aadhaar_first_name=$row['aadhaar_first_name'];
			$base_aadhaar_last_name=$row['aadhaar_last_name'];
			$base_aadhaar_date_of_birth=$row['aadhaar_date_of_birth'];
			$base_aadhaar_month_of_birth=$row['aadhaar_month_of_birth'];
			$base_aadhaar_year_of_birth=$row['aadhaar_year_of_birth'];
			$base_aadhaar_sex=$row['aadhaar_sex'];
			$base_aadhaar_address=$row['aadhaar_address'];
			$base_aadhaar_city=$row['aadhaar_city'];
			$base_aadhaar_state=$row['aadhaar_state'];
			$base_aadhaar_pin_code=$row['aadhaar_pin_code'];
			
		}
		echo $base_aadhaar;
		if($base_aadhaar==$aadhaar_id)
		{
			
			//$sql="INSERT INTO `personaldetail`(`aadhaar_id`, `email`, `password`, `mobileno`, `emergencyno`, `weight`, `height`, `blood_group`) VALUES ('".$aadhaar_id."','".$email_id."','".$password."','".$mobile_number."','".$emergency_no."','".$weight."','".$height."','".$blood_group."');";
			$sql="INSERT INTO `personaldetail`(`aadhaar_id`, `aadhaar_first_name`, `aadhaar_last_name`, `aadhaar_date_of_birth`, `aadhaar_month_of_birth`, `aadhaar_year_of_birth`, `aadhaar_sex`, `aadhaar_address`, `aadhaar_city`, `aadhaar_state`, `aadhaar_pin_code`, `email`, `password`, `mobileno`, `emergencyno`, `weight`, `height`, `blood_group`) VALUES ('".$base_aadhaar."','".$base_aadhaar_first_name."','".$base_aadhaar_last_name."','".$base_aadhaar_date_of_birth."','".$base_aadhaar_month_of_birth."','".$base_aadhaar_year_of_birth."','".$base_aadhaar_sex."','".$base_aadhaar_address."','".$base_aadhaar_city."','".$base_aadhaar_state."','".$base_aadhaar_pin_code."','".$email_id."','".$password."','".$mobile_number."','".$emergency_no."','".$weight."','".$height."','".$blood_group."');";
			mysql_query($sql);
		}
		echo $base_aadhaar."<br />";
		echo $base_aadhaar_first_name."<br />";
	?>
</body>
</html>
