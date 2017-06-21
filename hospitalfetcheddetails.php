<?php include 'hospitalnav.php';
		session_start();
?>
<html>
<head>
</head>
<body  class="parallax">
<?php include_once("analyticstracking.php") ?>
	<?php
		include 'conn.php';
		$aadhaar_id = (string) $_POST['aadhaar_id'];
		$str="SELECT * FROM personaldetail WHERE aadhaar_id = '".$aadhaar_id."'";
		$records = mysql_query($str);
		while($row = mysql_fetch_array($records))
		{
			$aadhaar_id = $row['aadhaar_id'];
			$aadhaar_first_name=$row['aadhaar_first_name'];
			$aadhaar_last_name=$row['aadhaar_last_name'];
			$dateofbirth = $row['aadhaar_date_of_birth'];
			$monthofbirth = $row['aadhaar_month_of_birth'];
			$yearofbirth = $row['aadhaar_year_of_birth'];
			$gender = $row['aadhaar_sex'];
			$address = $row['aadhaar_address'];
			$city = $row['aadhaar_city'];
			$state = $row['aadhaar_state'];
			$pincode = $row['aadhaar_pin_code'];
			$email = $row['email'];
			$mobileno = $row['mobileno'];
			$emergencyno = $row['emergencyno'];
			$weight = $row['weight'];
			$height = $row['height'];
			$blood_group = $row['blood_group'];			
		}
		$_SESSION['aadhaar_id'] = $aadhaar_id;
		$_SESSION['$aadhaar_first_name'] = $aadhaar_first_name;
		$_SESSION['$aadhaar_last_name'] = $aadhaar_last_name;
		if($gender=='m')
		{
			$gender="Male";
		}
		else
		{
			$gender="Female";
		}
	?>
	<div style="padding:20px 0px 0px 0px;"/>
		<div class="container" style="background:white; padding:20px 0px 0px 30px;">
			<h2><center>Fetch Patient Details</center></h2>
			<div class="container" style="background:white">
				<fieldset style="width: 80%; padding: 50px; margin: 50px 0px 50px 50px"><legend>Your Details</legend>
					<table class="tg" align="center">
						<tr><td class="tg-rmb8">Aadhaar Id:<br></br></td><td class="tg-rmb8"><?php echo $aadhaar_id;?><br></br></td></tr>
						<tr><td class="tg-yw4l">Name:<br></br></td><td class="tg-yw4l"><?php echo $aadhaar_first_name." ".$aadhaar_last_name;?><br></br></td></tr>
						<tr><td class="tg-rmb8">D.O.B.:<br></br></td><td class="tg-rmb8"><?php echo $dateofbirth."/".$monthofbirth."/".$yearofbirth;?><br></br></td></tr>
						<tr><td class="tg-yw4l">Gender:<br></br></td><td class="tg-yw4l"><?php echo $gender;?><br></br></td></tr>
						<tr><td class="tg-rmb8">Address:<br></br></td><td class="tg-rmb8"><?php echo $address;?><br></br></td></tr>
						<tr><td class="tg-rmb8">City:<br></br></td><td class="tg-rmb8"><?php echo $city;?><br></br></td></tr>
						<tr><td class="tg-rmb8">State:<br></br></td><td class="tg-rmb8"><?php echo $state;?><br></br></td></tr>
						<tr><td class="tg-rmb8">Pincode:<br></br></td><td class="tg-rmb8"><?php echo $pincode;?><br></br></td></tr>
						<tr><td class="tg-yw4l">Email:<br></br></td><td class="tg-yw4l"><?php echo $email;?><br></br></td></tr>
						<tr><td class="tg-rmb8">Contact Number:<br></br></td><td class="tg-rmb8"><?php echo $mobileno;?><br></br></td></tr> 
						<tr><td class="tg-yw4l">Emergency Number:<br></br></td><td class="tg-yw4l"><?php echo $emergencyno;?><br></br></td></tr> 
						<tr><td class="tg-rmb8">Weight:<br></br></td><td class="tg-rmb8"><?php echo $weight;?><br></br></td></tr>
						<tr><td class="tg-yw4l">Height:<br></br></td><td class="tg-yw4l"><?php echo $height;?><br></br></td></tr> 
						<tr><td class="tg-rmb8">Bloog Group:<br></br></td><td class="tg-rmb8"><?php echo $blood_group;?><br></br></td></tr>
					</table>
				</fieldset>
				<form action="hospitalfetcheddetailsconfitmation.php" method="post">
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" onclick="this.placeholder = 'Appointed Doctor'" onfocusout="this.placeholder = ''" required name="appointed_doctor_name" >
							<label>Doctor Name</label>	
						</div>
					</div>
					<div class="row">
						<div class="col s3">
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">comment</i>
							<input type="text" onclick="this.placeholder = 'Patient Illness'" onfocusout="this.placeholder = ''" required name="appointed_illiness" >
							<label>Illness</label>	
						</div>
					</div>
					<div class="row">
						<center><button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button><center>
					</div>
				</form>
				<br/>
			</div>
		</div>
	<div>
</body>
</html>
