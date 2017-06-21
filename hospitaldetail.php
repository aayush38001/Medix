<?php session_start();
?>
<html>
<head>
<script src="functions.js"></script>
</head>
<body >
<?php include_once("analyticstracking.php") ?>
<?php include 'personalnav.php';

		mysql_connect('localhost','root','');
		mysql_select_db('medix');
		$hospital_email_id = (string) $_POST['hospital_email_id'];
		
		$str="SELECT * FROM hospitaldetail WHERE hospital_email_id = '".$hospital_email_id."'";
		$records = mysql_query($str);
		$hospital_email_id=0;
		while($row = mysql_fetch_array($records))
		{
			$hospital_name = $row['hospital_name'];
			$hospital_licence_no = $row['hospital_licence_no'];
			$hospital_email_id=$row['hospital_email_id'];
			$hospital_user_id=$row['hospital_user_id'];
			$aadhaar_fax=$row['hospital_fax_no'];
			$hospital_contact_number = $row['hospital_contact_number'];
			$hospital_type = $row['hospital_type'];
			$hospital_address = $row['hospital_address'];
			$hospital_city = $row['hospital_city'];
			$hospital_state = $row['hospital_state'];
			$hospital_pincode = $row['hospital_pin_code'];
		}
	?>
	<div class="container" style="background:white; paddig:20px 0px 1px 20px;">
	<br/>
		<fieldset style="width: 50%; padding: 50px; margin: 50px 0px 160px 220px"><legend>Your Details</legend>
                       <table class="tg" align="center">
							<tr><td class="tg-rmb8">Hospital Name:<br></br></td><td class="tg-rmb8"><?php echo $hospital_name;?><br></br></td></tr>
							<tr><td class="tg-yw4l">Hospital Licence Number:<br></br></td><td class="tg-yw4l"><?php echo $hospital_licence_no;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Email Id.:<br></br></td><td class="tg-rmb8"><?php echo $hospital_email_id;?><br></br></td></tr>
							<tr><td class="tg-yw4l">Hospital User Id:<br></br></td><td class="tg-yw4l"><?php echo $hospital_user_id;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Type:<br></br></td><td class="tg-rmb8"><?php echo $hospital_type;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Contact Number:<br></br></td><td class="tg-rmb8"><?php echo $hospital_contact_number;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Fax Number:<br></br></td><td class="tg-rmb8"><?php $aadhaar_fax;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Address:<br></br></td><td class="tg-rmb8"><?php $hospital_address;?><br></br></td></tr>
							<tr><td class="tg-yw4l">City:<br></br></td><td class="tg-yw4l"><?php echo $hospital_city;?><br></br></td></tr>
							<tr><td class="tg-rmb8">State:<br></br></td><td class="tg-rmb8"><?php echo $hospital_state;?><br></br></td></tr> 
							<tr><td class="tg-yw4l">Pincode:<br></br></td><td class="tg-yw4l"><?php echo $hospital_pincode;?><br></br></td></tr> 
							</table>
        </fieldset>
		<br />
	</div>
	
</body>
</html>