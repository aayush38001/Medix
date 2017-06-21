<html>
<head>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
	<?php
		session_start();
		mysql_connect('localhost','root','');
		mysql_select_db('medix');
		
		$hospital_name = (string) $_POST['hospital_name'];
		$hospital_email_id = (string) $_POST['hospital_email_id'];
		$hospital_user_id = (string) $_POST['hospital_user_id'];
		$hospital_type = (string) $_POST['hospital_type'];
		$hospital_licence_no = (string) $_POST['hospital_licence_no'];
		$hospital_password = (string) $_POST['hospital_password'];
		$hospital_confirm_password = (string) $_POST['hospital_confirm_password'];
		$hospital_contact_number = (string) $_POST['hospital_contact_number'];
		$hospital_alternate_no = (string) $_POST['hospital_alternate_no'];
		$hospital_fax_no = (string) $_POST['hospital_fax_no'];
		$hospital_address = (string) $_POST['hospital_address'];
		$hospital_city = (string) $_POST['hospital_city'];
		$hospital_state = (string) $_POST['hospital_state'];
		$hospital_pin_code = (string) $_POST['hospital_pin_code'];
		if($hospital_password!=$hospital_confirm_password)
		{
			echo "<script>
            alert('Password Not Matched!!!');
            </script>";
            echo '<script>window.location="hospitalsignup.php";</script>';
		}
		else
		{
			$sql="INSERT INTO `hospitaldetail`(`hospital_name`, `hospital_email_id`, `hospital_password`, `hospital_user_id`, `hospital_fax`, `hospital_contact_number`, `hospital_type`, `hospital_address`, `hospital_city`, `hospital_state`, `hospital_pin_code`, `hospital_licence_no`) VALUES ('".$hospital_name."','".$hospital_email_id."','".$hospital_password."','".$hospital_user_id."','".$hospital_fax_no."','".$hospital_contact_number."','".$hospital_type."','".$hospital_address."','".$hospital_city."','".$hospital_state."','".$hospital_pin_code."','".$hospital_licence_no."')";	
			mysql_query($sql);
			echo "<script>
            alert('Signup successfully!!!');
            </script>";
            echo '<script>window.location="hospitallogin.php";</script>';
			
		}
		
		
		/*$str="SELECT * FROM aadhaar WHERE aadhaar_id = '".$aadhaar_id."'";
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
		if($base_aadhaar==$aadhaar_id)
		{
			
			//$sql="INSERT INTO `personaldetail`(`aadhaar_id`, `email`, `password`, `mobileno`, `emergencyno`, `weight`, `height`, `blood_group`) VALUES ('".$aadhaar_id."','".$email_id."','".$password."','".$mobile_number."','".$emergency_no."','".$weight."','".$height."','".$blood_group."');";
			$sql="INSERT INTO `personaldetail`(`aadhaar_id`, `aadhaar_first_name`, `aadhaar_last_name`, `aadhaar_date_of_birth`, `aadhaar_month_of_birth`, `aadhaar_year_of_birth`, `aadhaar_sex`, `aadhaar_address`, `aadhaar_city`, `aadhaar_state`, `aadhaar_pin_code`, `email`, `password`, `mobileno`, `emergencyno`, `weight`, `height`, `blood_group`) VALUES ('".$base_aadhaar."','".$base_aadhaar_first_name."','".$base_aadhaar_last_name."','".$base_aadhaar_date_of_birth."','".$base_aadhaar_month_of_birth."','".$base_aadhaar_year_of_birth."','".$base_aadhaar_sex."','".$base_aadhaar_address."','".$base_aadhaar_city."','".$base_aadhaar_state."','".$base_aadhaar_pin_code."','".$email_id."','".$password."','".$mobile_number."','".$emergency_no."','".$weight."','".$height."','".$blood_group."');";
			mysql_query($sql);
		}*/
	?>
</body>
</html>
