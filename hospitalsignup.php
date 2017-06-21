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
<title>Medix</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<script>
	$(document).ready(function() {
    Materialize.updateTextFields();
	});
</script>
</head>
<?php include 'nav.php';?>
	<body class="parallax">
	<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
<?php include_once("analyticstracking.php") ?>
	<div style="padding:20px;"/>
		<div class="container" style="opacity:0.86;background:white; padding:20px 0px 0px 20px;">
		<h4><center>Hospital Signup</center></h4>
			<form action="hospitalwelcome.php" method="post">
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
