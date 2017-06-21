<?php
	session_start();
	include 'doctornav.php'; 
	include 'conn.php';
	$email_id=$_SESSION['login_email_id'];
	$doctor_first_name = (string) $_POST['doctor_first_name'];
	$doctor_last_name = (string) $_POST['doctor_last_name'];
	$doctor_licence_number = (string) $_POST['doctor_licence_number'];
	$doctor_email_id = (string) $_POST['doctor_email_id'];
	$doctor_password = (string) $_POST['doctor_password'];
	$doctor_confirm_password = (string) $_POST['doctor_confirm_password'];
	$doctor_contact_number = (string) $_POST['contact_number'];
	$doctor_emergency_number = (string) $_POST['emergency_no'];
	$doctor_gender = (string) $_POST['doctor_gender'];
	$doctor_hospital_name = (string) $_POST['doctor_hospital_name'];
	$doctor_hospital_location = (string) $_POST['doctor_hospital_location'];
	$doctor_year_of_joining = (string) $_POST['doctor_year_of_joining'];
	$doctor_specialization = (string) $_POST['doctor_specialization'];
	
	if($doctor_password!=$doctor_confirm_password)
	{
		echo "incorrect password <br />";
	}
	//$sql="INSERT INTO `doctordetail`(`doctor_first_name`, `doctor_last_name`, `doctor_licence_number`, `doctor_email_id`, `doctor_password`, `doctor_contact_number`, `doctor_emergency_number`, `doctor_gender`, `doctor_hospital_name`, `doctor_hospital_location`, `doctor_year_of_joining`,`doctor_specialization`) VALUES ('".$doctor_first_name."','".$doctor_last_name."','".$doctor_licence_number."','".$doctor_email_id."','".$doctor_password."','".$doctor_contact_number."','".$doctor_emergency_number."','".$doctor_gender."','".$doctor_hospital_name."','".$doctor_hospital_location."','".$doctor_year_of_joining."','".$doctor_specialization."');";
	$sql="UPDATE `doctordetail` SET `doctor_first_name`='".$doctor_first_name."',`doctor_last_name`='".$doctor_last_name."',`doctor_licence_number`='".$doctor_licence_number."',`doctor_email_id`='".$doctor_email_id."',`doctor_password`='".$doctor_password."',`doctor_contact_number`='".$doctor_contact_number."',`doctor_emergency_number`='".$doctor_emergency_number."',`doctor_gender`='".$doctor_gender."',`doctor_hospital_name`='".$doctor_hospital_name."',`doctor_hospital_location`='".$doctor_hospital_location."',`doctor_year_of_joining`='".$doctor_year_of_joining."',`doctor_specialization`='".$doctor_specialization."' WHERE doctor_email_id = '".$email_id."'";
	//echo "<br />".$sql;
	mysql_query($sql);
	echo "<script>
            alert('Successfully Updated!!!');
            </script>";
            echo '<script>window.location="doctorlogin.php";</script>';
	?>
<html>
<head>
</head>
<body class="parallax">
<?php include_once("analyticstracking.php") ?>
	
</body>
</html>
