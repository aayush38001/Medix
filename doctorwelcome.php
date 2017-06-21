<?php include_once("analyticstracking.php") ?>
<?php
	session_start();
	include 'nav.php'; 
	include 'conn.php';
	
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
	$sql="INSERT INTO `doctordetail`(`doctor_first_name`, `doctor_last_name`, `doctor_licence_number`, `doctor_email_id`, `doctor_password`, `doctor_contact_number`, `doctor_emergency_number`, `doctor_gender`, `doctor_hospital_name`, `doctor_hospital_location`, `doctor_year_of_joining`,`doctor_specialization`) VALUES ('".$doctor_first_name."','".$doctor_last_name."','".$doctor_licence_number."','".$doctor_email_id."','".$doctor_password."','".$doctor_contact_number."','".$doctor_emergency_number."','".$doctor_gender."','".$doctor_hospital_name."','".$doctor_hospital_location."','".$doctor_year_of_joining."','".$doctor_specialization."');";
	//echo "<br />".$sql;
	mysql_query($sql);
?>
<html>
<head>
</head>
<body class="parallax">
	<br/>
	<div class="container" style="padding:30px 0px 0px 20px;opacity:0.8;">
		<h3><font color="white">Congrats you have sucessfully signed in.</font></h3>
		<p><font color="white">Click here <a href="hospitallogin.php"><button class="waves-effect waves-light btn">Login</button></a> to login.
		</p><br/>
	</div>
</body>
</html>
