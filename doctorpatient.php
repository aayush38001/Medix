<?php include_once("analyticstracking.php") ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type='text/javascript'>
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>
<style type="text/css">
/* BackToTop button css */
#scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color:#3498db;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff
}
#scroll:hover {
    background-color:#e74c3c;
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
}
</style>

<?PHP
	session_start();
	include 'doctornav.php';
	include 'conn.php';
	$doctor_email_id=$_SESSION['doctor_email_id'];
	$patient_aadhaar=$_GET["patient_aadhaar"];
	$_SESSION['patient_aadhaar']=$patient_aadhaar;
	$illiness=$_GET["illiness"];
	$str="SELECT * FROM personaldetail WHERE aadhaar_id = '".$patient_aadhaar."'";
		$records = mysql_query($str);
		$aadhaar_id=0;
		while($row = mysql_fetch_array($records))
		{
			$aadhaar_id = $row['aadhaar_id'];
			$base_password=$row['password'];
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
		$_SESSION["aadhaar"] = $aadhaar_id;
		if($gender=='m'||$gender=='M')
		{
			$gender="Male";
		}
		else
		{
			$gender="Female";
		}
		$aadhaar_first_name=ucfirst($aadhaar_first_name);
		$aadhaar_last_name=ucfirst($aadhaar_last_name);
		
?>
</head>
<body class="parallax">
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
	<div style="padding:20px 0px 0px 0px;"/>
	<div  class="container" style="background:white;opacity:0.88;padding:0px 0px 0px 50px;">
	
	<h2><center>Prescription</center></h2>
		<form action="historysave.php" method="post">
			<div class="row">
				<div class="input-field col s10" >
					<textarea id="textarea" required class="materialize-textarea" name="history"></textarea>
					<label for="textarea">Prescription</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s5" >
					<input id="date" type="date" name="date">
					<label>Next Appointment Date</label>
				</div>
				<div class="col s5">
					
				</div>
			</div>
			<center><button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button><center>
			<br/>
		</form>
		</div>
		<br/>
	<div class="container" style="background:white;opacity:0.88">
	<div style="padding:20px 0px 0px 0px;"/>
		<div class="container" style="background:white; paddig:20px 0px 1px 20px;">
		<h2><center>Patient Details</center></h2>
			<fieldset style=" padding:50px; margin: 10px 0px 10px 0px">
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
		<br />
		</div>
	</div>
<!-- Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
</body>
</html>
