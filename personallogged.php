<?php 
?>
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
<script src="functions.js"></script>
</head>
<body class="parallax">
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
<?php include_once("analyticstracking.php") ?>
<?php include 'personalnav.php';

		include 'conn.php';
		$aadhaar_id = (string) $_POST['aadhaar_id'];
		$password = (string) $_POST['password'];
		$str="SELECT * FROM personaldetail WHERE aadhaar_id = '".$aadhaar_id."'";
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
		if($password != $base_password)
		{
			//echo "incorrect password <br />";
			//$message = "Aadhaar Card Number or Password incorrect.\\nTry again.";
			//echo "<script type='text/javascript'>alert('$message');</script> <a href='http://localhost/site/personallogin.php'> Click</a> here to login again";
			echo "<script>
            alert('wrong Aadhaar Card Number or Password!!!');
            </script>";
            echo '<script>window.location="personallogin.php";</script>';
		}
		else
		{
			$aadhaar_first_name=ucfirst($aadhaar_first_name);
			$aadhaar_last_name=ucfirst($aadhaar_last_name);
			//echo "Welcome ".$aadhaar_first_name." ".$aadhaar_last_name."<br />";	
		}
	?>
	<!--<div style="background-color:#37474f; padding:10px 0px 0px 0px">
		<font color="#00bcd4"><h4><?php echo "Welcome ".$aadhaar_first_name." ".$aadhaar_last_name;?></h4></font>
	</div>-->
	<nav style="opacity:0.86">
		<div class="nav-wrapper cyan ">
		  <ul id="nav-mobile" class="hide-on-med-and-down">
			<li><?php echo "Welcome ".$aadhaar_first_name." ".$aadhaar_last_name;?></li>
			<li class="right"><a href="patienthistory.php"><i class="large material-icons left">assessment</i>Patient History</a></li>
		  </ul>
		</div>
	</nav>
	<div style="padding:20px 0px 0px 0px"/>
	<div class="container" style="background:white; paddig:20px 0px 1px 20px;">
	<br/>
		<fieldset style="width: 50%; padding: 50px; margin: 50px 0px 160px 220px"><legend>Your Details</legend>
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
</body>
</html>
