<?php 
	include 'hospitalnav.php';
		session_start();
?>
<html>
<head>
</head>
<body class="parallax">
<?php include_once("analyticstracking.php") ?>
	<?php
		include 'conn.php';
		$hospital_doctor_appointed_name = (string) $_POST['appointed_doctor_name'];
		$hospital_illiness = (string) $_POST['appointed_illiness'];
		$patient_aadhaar_id=$_SESSION['aadhaar_id'];
		$aadhaar_first_name=$_SESSION['$aadhaar_first_name'];
		$aadhaar_last_name=$_SESSION['$aadhaar_last_name'];
		$aadhaar_full_name=$aadhaar_first_name." ".$aadhaar_last_name;
		$str="SELECT doctor_first_name FROM `doctordetail` WHERE doctor_first_name='".$hospital_doctor_appointed_name."'";
		$records=mysql_query($str);
		$doctor_first_name="";
		while($row = mysql_fetch_array($records))
		{
			$doctor_first_name=$row['doctor_first_name'];
		}
		echo $doctor_first_name;
		if($hospital_doctor_appointed_name==$doctor_first_name)
		{
			/*$sql="INSERT INTO `appointeddoctor`(`doctor_name`, `patient_aadhaar`, `illiness`) 
					VALUES ('".$hospital_doctor_appointed_name."','".$patient_aadhaar_id."','".$hospital_illiness."')";
			*/$sql="INSERT INTO `appointeddoctor`(`doctor_name`, `patient_name`, `patient_aadhaar`, `illiness`) 
						VALUES ('".$hospital_doctor_appointed_name."','".$aadhaar_full_name."','".$patient_aadhaar_id."','".$hospital_illiness."')";
			$flag=mysql_query($sql);
			if($flag!=false)
			{
				echo "sucessfull";
				header('Location: hospitallogged.php');
			}
			else
			{
				echo "unsucessfull";
			}
		}
		else
		{
			echo"";
		}
	?>
	<br/>
	<div class="container" style="opacity:0.8;padding:20px 0px 0px 20px;">
		<center><h3><font color="white">No Such Doctor Registered.</font></h3></center>
		<br/>
	</div>
</body>
</html>