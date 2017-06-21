<html>
<head>
<title>Medix</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
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
<?php 
	include 'nav.php';
	include 'conn.php';
?>
	<body class="parallax">
	<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
	<?php include_once("analyticstracking.php") ?>
		<div style="padding:20px;"/>
		<div class="container" style="opacity:0.86;background:white; padding:20px 0px 0px 20px;">
		<h4><center>Doctor Signup</center></h4>
			<form action="doctorwelcome.php" method="post">
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">credit_card</i>
						<input required type="text" required name="doctor_first_name">
						<label>First Name</label>	
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">contacts</i>
						<input required type="text" required name="doctor_last_name">
						<label>Last Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">comment</i>
						<input type="text" onclick="this.placeholder = 'XXXXXX'" onfocusout="this.placeholder = ''" required name="doctor_licence_number">
						<label>Licence Number</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">email</i>
						<input type="email" onclick="this.placeholder = 'Myemail@email.com'" onfocusout="this.placeholder = ''" required name="doctor_email_id">
						<label>Email ID</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">subtitles</i>
						<input type="password" required name="doctor_password">
						<label>Password</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">subtitles</i>
						<input type="password" required name="doctor_confirm_password">
						<label>Confirm Password</label>	
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						<i class="material-icons prefix">call</i>
						<input type="number" onclick="this.placeholder = 'XXXXXXXXXXXX'" onfocusout="this.placeholder = ''" required name="contact_number">
						<label>Contact Number</label>
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">call</i>
						<input  type="number" onclick="this.placeholder = 'XXXXXXXXXXXX'" onfocusout="this.placeholder = ''" required name="emergency_no">
						<label>Emergency Contact Number</label>	
					</div>
					<div class="input-field col s3" >
					<i class="material-icons prefix">supervisor_account</i>
						<input required type="text" onclick="this.placeholder = 'Male/Female'" onfocusout="this.placeholder = ''" required name="doctor_gender">
						<label>Gender</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						<i class="material-icons prefix">polymer</i>
						<input type="text" required name="doctor_hospital_name">
						<label>Hospital Name</label>
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">my_location</i>
						<input  type="text" required name="doctor_hospital_location">
						<label>Hospital Location</label>
					</div>
					<div class="input-field col s3">
						<i class="material-icons prefix">work</i>
						<input  type="text" onclick="this.placeholder = 'XXXX'" onfocusout="this.placeholder = ''" required name="doctor_year_of_joining">
						<label>Year Of Joining</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">work</i>
						<input  type="text" id="country_id" onkeyup="autocomplet()"onclick="this.placeholder = 'XXXX'" onfocusout="this.placeholder = ''" required name="doctor_specialization">
						<label>Specialization</label>
						<ul id="country_list_id"></ul>
					</div>
				</div>
				<center><button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button><center>
			</form>
			<br />
		</div>
		
	</body>
</html>
