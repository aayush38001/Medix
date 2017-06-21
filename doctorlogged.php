<html>
<head>
</head>
<body class="parallax">
<?php include_once("analyticstracking.php") ?>
<?php 
	session_start();
	include 'doctornav.php';
	include 'conn.php';
	error_reporting(0);
	$doctor_email_id = (string) $_POST['doctor_email_id'];
	$doctor_password = (string) $_POST['doctor_password'];
	$_SESSION['doctor_email_id']=$doctor_email_id;
	$str="SELECT * FROM doctordetail WHERE doctor_email_id = '".$_SESSION['doctor_email_id']."'";
	$records = mysql_query($str);
	while($row = mysql_fetch_array($records))
	{
		$base_password=$row['doctor_password'];
		$doctor_first_name=$row['doctor_first_name'];
		
	}
	if($doctor_password != $base_password)
	{
		//echo "incorrect password <br />";
		//header("Location: http://localhost/site/doctorlogin.php");
		//$message = "Username /or Password incorrect.\\nTry again.";
		//echo "<script type='text/javascript'>alert('$message');</script> <a href='http://localhost/site/doctorlogin.php'> Click</a> here to login again";
		echo "<script>
		alert('wrong E-mail or Password!!!');
		</script>";
		echo '<script>window.location="doctorlogin.php";</script>';
	}
	$str="SELECT * FROM appointeddoctor where doctor_name LIKE \"%".$doctor_first_name."%\"";
	//echo $str;
	$records = mysql_query($str);
	echo"
	<div style=\"padding:20px 0px 0px 0px;\"/>
	<div class=\"container\" style=\"background:white;opacity:0.88\">
		<ul class=\"collection\">";	
		//http://www.example.com/index.html?name=john&email=john@gmail.com&contact=9877989898
	while($row = mysql_fetch_array($records))
	{
		//print_r ($row);
		$patient_aadhaar=$row['patient_aadhaar'];
		$patient_name=$row['patient_name'];
		$illiness=$row['illiness'];
	
		echo"
			<li class=\"collection-item avatar\">
			  
			  <p>Patient Name: ".$patient_name." <br>
				 Patient Aadhaar Card: ".$patient_aadhaar." <br>
				 Illiness: ".$illiness."
			  </p>
			  <a href=\"doctorpatient.php?patient_aadhaar=".$patient_aadhaar."&illiness=".$illiness."\" class=\"secondary-content\"><i class=\"material-icons\">send</i></a>
		</li>";
	}
?>
		</ul>            
	</div>
</body>
</html>
