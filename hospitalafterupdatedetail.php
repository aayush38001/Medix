<?php
	session_start();
	include 'hospitalnav.php';
	include 'conn.php';
	$email_id=$_SESSION['login_email_id'];
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
		echo "incorrect password <br />";
	}
	//$sql="INSERT INTO `hospitaldetail`(`hospital_name`, `hospital_email_id`, `hospital_password`, `hospital_user_id`, `hospital_fax`, `hospital_contact_number`, `hospital_type`, `hospital_address`, `hospital_city`, `hospital_state`, `hospital_pin_code`, `hospital_licence_no`) VALUES ('".$hospital_name."','".$hospital_email_id."','".$hospital_password."','".$hospital_user_id."','".$hospital_fax_no."','".$hospital_contact_number."','".$hospital_type."','".$hospital_address."','".$hospital_city."','".$hospital_state."','".$hospital_pin_code."','".$hospital_licence_no."')";
	$sql="UPDATE `hospitaldetail` SET `hospital_name`='".$hospital_name."',`hospital_email_id`='".$hospital_email_id."',`hospital_password`='".$hospital_password."',`hospital_user_id`='".$hospital_user_id."',`hospital_fax`='".$hospital_fax_no."',`hospital_contact_number`='".$hospital_contact_number."',`hospital_type`='".$hospital_type."',`hospital_address`='".$hospital_address."',`hospital_city`='".$hospital_city."',`hospital_state`='".$hospital_state."',`hospital_pin_code`='".$hospital_pin_code."',`hospital_licence_no`='".$hospital_licence_no."' WHERE hospital_email_id = '".$email_id."'";
	//echo "<br />".$sql;
	mysql_query($sql);
	echo "<script>
            alert('Successfully Updated!!!');
            </script>";
            echo '<script>window.location="hospitallogin.php";</script>';
	?>
<html>
<head>
</head>
<body class="parallax">
<?php include_once("analyticstracking.php") ?>	
</body>
</html>
