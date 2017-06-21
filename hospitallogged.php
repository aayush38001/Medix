<?php 
	include 'hospitalnav.php';
	session_start();
	error_reporting(0);
	mysql_connect('localhost','root','');
	mysql_select_db('medix');
	$login_email_id = (string) $_POST['login_email_id'];
	$_SESSION['login_email_id']=$login_email_id;
	$login_password = (string) $_POST['login_password'];
	$str="SELECT hospital_password FROM hospitaldetail WHERE hospital_email_id = '".$login_email_id."'";
	$records = mysql_query($str);
	while($row = mysql_fetch_array($records))
	{
		$base_password=$row['hospital_password'];
	}
	if($login_password != $base_password)
	{
		//echo "incorrect password <br />";
		//$message = "Username /or Password incorrect.\\nTry again.";
		//echo "<script type='text/javascript'>alert('$message');</script> <a href='http://localhost/site/hospitallogin.php'> Click</a> here to login again";
		echo "<script>
		alert('wrong E-mail or Password!!!');
		</script>";
		echo '<script>window.location="hospitallogin.php";</script>';
	}
	$str="SELECT * FROM hospitaldetail WHERE hospital_email_id ='".$_SESSION['login_email_id']."'";
		$records = mysql_query($str);
		$hospital_email_id=0;
		while($row = mysql_fetch_array($records))
		{
			$hospital_name = $row['hospital_name'];
			$hospital_licence_no = $row['hospital_licence_no'];
			$hospital_email_id=$row['hospital_email_id'];
			$hospital_user_id=$row['hospital_user_id'];
			$aadhaar_fax=$row['hospital_fax'];
			$hospital_contact_number = $row['hospital_contact_number'];
			$hospital_type = $row['hospital_type'];
			$hospital_address = $row['hospital_address'];
			$hospital_city = $row['hospital_city'];
			$hospital_state = $row['hospital_state'];
			$hospital_pincode = $row['hospital_pin_code'];
		}
		
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery Back To Top Button by CodexWorld</title>
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
</head>
<body  class="parallax">
<?php include_once("analyticstracking.php") ?>
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
	<nav style="opacity:0.86">
		<div class="nav-wrapper cyan ">
		  <ul id="nav-mobile" class="hide-on-med-and-down">
			<li><a href="hospitallogged.php#FetchDetails"><i class="material-icons left"><span2>toc</span2></i>Fetch Patient Details</a></li>
			<li><a href="hospitallogged.php#HospitalDetails"><i class="material-icons left"><span2>toc</span2></i>Hospital Details</a></li>
			<li class="right"><a href="hospitallogged.php#UpdateDetails"><i class="material-icons left"><span2>toc</span2></i>Update Details </a></li>
			<!--<li><a href="shipper.php">Review about Movers</a></li>-->
		  </ul>
		</div>
	</nav>
		<section id="FetchDetails">
			<header>
				<!--<center><h3><font color = white>Fetch Details</font></h3><center>-->
			</header>
			 <div style="padding:20px 0px 0px 0px;"/>
		<div style="padding:20px 0px 0px 0px;"/>
		<br/>
	<div class="container" style="background:white; padding:20px 0px 0px 30px;">
		<h2><center>Fetch Patient Details</center></h2>
		<form action="hospitalfetcheddetails.php" method="post">
			<div class="row">
				<div class="col s4">
				</div>
				<div class="input-field col s4">
					<i class="material-icons prefix">credit_card</i>
					<input type="number" onclick="this.placeholder = 'XXXX XXXX XXXX'" onfocusout="this.placeholder = ''" required name="aadhaar_id" >
					<label>Aadhaar Card</label>	
				</div>				
			</div>
			<div class="row">
				<center><button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button><center>
			</div>
			<div style="padding:20px 0px 0px 0px;"/>
		</form>
    </div>
	</section>
	<section id="HospitalDetails">
	<br/>
			<div style="padding:20px 0px 0px 0px;"/>
				<!--<center><h3><font color = white>Hospital Details</font></h3><center>-->
	<div class="container" style="background:white; paddig:20px 0px 1px 20px;">
	<div style="padding:20px 0px 0px 0px;"/>
	<h2><center>Hospital Details</center></h2>
	
		<fieldset style="width: 50%; padding: 50px; margin: 50px 0px 160px 220px"><!--<legend>Hospital Details</legend>-->
                       <table class="tg" align="center">
							<tr><td class="tg-rmb8">Hospital Name:<br></br></td><td class="tg-rmb8"><?php echo $hospital_name;?><br></br></td></tr>
							<tr><td class="tg-yw4l">Hospital Licence Number:<br></br></td><td class="tg-yw4l"><?php echo $hospital_licence_no;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Email Id.:<br></br></td><td class="tg-rmb8"><?php echo $hospital_email_id;?><br></br></td></tr>
							<tr><td class="tg-yw4l">Hospital User Id:<br></br></td><td class="tg-yw4l"><?php echo $hospital_user_id;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Type:<br></br></td><td class="tg-rmb8"><?php echo $hospital_type;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Contact Number:<br></br></td><td class="tg-rmb8"><?php echo $hospital_contact_number;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Fax Number:<br></br></td><td class="tg-rmb8"><?php echo $aadhaar_fax;?><br></br></td></tr>
							<tr><td class="tg-rmb8">Address:<br></br></td><td class="tg-rmb8"><?php echo $hospital_address;?><br></br></td></tr>
							<tr><td class="tg-yw4l">City:<br></br></td><td class="tg-yw4l"><?php echo $hospital_city;?><br></br></td></tr>
							<tr><td class="tg-rmb8">State:<br></br></td><td class="tg-rmb8"><?php echo $hospital_state;?><br></br></td></tr> 
							<tr><td class="tg-yw4l">Pincode:<br></br></td><td class="tg-yw4l"><?php echo $hospital_pincode;?><br></br></td></tr> 
						</table>
        </fieldset>
		<div style="padding:0px 0px 0px 0px;"/>
	</div>
	<div style="padding:20px 0px 0px 0px;"/>
	</section>
	<section id="UpdateDetails">
			<div style="padding:20px 0px 0px 0px;"/>
			<header>
				<!--<center><h3><font color = white>Update Details</font></h3><center>-->
			</header>
			<div style="padding:20px 0px 0px 0px;"/>
	<div class="container" style="background:white; padding:20px 0px 0px 20px;">
		<h4><center>Update Details</center></h4>
			<form action="hospitalafterupdatedetail.php" method="post">
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">view_quilt</i>
						<input type="text" onclick="this.placeholder = 'Name of Hospital'" onfocusout="this.placeholder = ''" required name="hospital_name">
						<label>Hospital Name</label>	
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">contacts</i>
						<input type="email" onclick="this.placeholder = 'Mygoogle@email.com'" onfocusout="this.placeholder = ''" required name="hospital_email_id">
						<label>Email ID</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						<i class="material-icons prefix">perm_identity</i>
						<input type="text" onclick="this.placeholder = 'Unique Hospital Identity'" onfocusout="this.placeholder = ''" required name= "hospital_user_id"/>
						<label>Hospital Identity</label>	
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">settings_input_svideo</i>
						<input type="text" onclick="this.placeholder = 'XXXXXX'" onfocusout="this.placeholder = ''" required name="hospital_licence_no">
						<label>Licence Number</label>	
					</div>
					<div class="input-field col s3">
						<i class="material-icons prefix">group_work</i>
						<input  type="text" onclick="this.placeholder = 'Hospital/Clinic'" onfocusout="this.placeholder = ''" required name="hospital_type">
						<label>Type</label>	
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
					<i class="material-icons prefix">subtitles</i>
						<input type="password" required name="hospital_password">
						<label>Password</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">subtitles</i>
						<input type="password" required name="hospital_confirm_password">
						<label>Confirm Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						<i class="material-icons prefix">dialpad</i>
						<input type="number" onclick="this.placeholder = 'XXXXXXXXX'" onfocusout="this.placeholder = ''" required name="hospital_contact_number">
						<label>Hospital Telephone Number</label>
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">call</i>
						<input type="number" onclick="this.placeholder = 'XXXXXXXXXXXX'" onfocusout="this.placeholder = ''" required name="hospital_alternate_no">
						<label>Alternate Number</label>
					</div>
					<div class="input-field col s3">
						<i class="material-icons prefix">print</i>
						<input type="number" onclick="this.placeholder = 'XXXXXXXXXXXX'" onfocusout="this.placeholder = ''" required name="hospital_fax_no">
						<label>Fax Number</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s11">
						<i class="material-icons prefix">mode_edit</i>
						<input  type="text" required name="hospital_address">
						<label>Address</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						<i class="material-icons prefix">store</i>
						<input  type="text" required name="hospital_city">
						<label>City</label>
					</div>
					<div class="input-field col s5">
						<i class="material-icons prefix">my_location</i>
						<input  type="text" required name="hospital_state">
						<label>State</label>
					</div>
					<div class="input-field col s2">
						<i class="material-icons prefix">markunread_mailbox</i>
						<input  type="text" onclick="this.placeholder = 'XXXXXX'" onfocusout="this.placeholder = ''" required name="hospital_pin_code">
						<label>Pin Code</label>
					</div>
				</div>
				<center><button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button><center>
			</form>
			<br />
		</div>
	
</body>
</html>
