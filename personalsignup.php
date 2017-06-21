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
		<h4><center>User Signup</center></h4>
			<form action="personalwelcome.php" method="post">
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">credit_card</i>
						<input type="number" onclick="this.placeholder = 'XXXX XXXX XXXX'" onfocusout="this.placeholder = ''" required name="aadhaar_id">
						<label>Aadhaar Card</label>	
					</div>
					<div class="input-field col s5">
						<i class="material-icons prefix">contacts</i>
						<input type="email" onclick="this.placeholder = 'Mygoogle@email.com'" onfocusout="this.placeholder = ''" required name="email_id">
						<label>Email ID</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
					<i class="material-icons prefix">subtitles</i>
						<input type="password" required name="password">
						<label>Password</label>
					</div>
					<div class="input-field col s5">
						<i class="material-icons prefix">subtitles</i>
						<input type="password" required name="confirm_password">
						<label>Confirm Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">dialpad</i>
						<input type="number" onclick="this.placeholder = 'XXXXXXXXXXXX'" onfocusout="this.placeholder = ''" required name="mobile_number">
						<label>Mobile Number</label>
					</div>
					<div class="input-field col s5">
						<i class="material-icons prefix">comment</i>
						<input  type="number" onclick="this.placeholder = 'XXXXXXXXXXXX'" onfocusout="this.placeholder = ''" required name="emergency_no">
						<label>Emergency Contact Number</label>	
					</div>
				</div>
				<div class="row">
					<div class="input-field col s3">
						<i class="material-icons prefix">comment</i>
						<input  type="number" onclick="this.placeholder = 'In Kilograms'" onfocusout="this.placeholder = ''" required name="weight">
						<label>Weight</label>
					</div>
					<div class="input-field col s3">
						<i class="material-icons prefix">assessment</i>
						<input  type="number" onclick="this.placeholder = 'In Centimeters'" onfocusout="this.placeholder = ''" required name="height">
						<label>Height</label>
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">loyalty</i>
						<input  type="text" onclick="this.placeholder = 'A/B/o/AB|+/-'" onfocusout="this.placeholder = ''" required name="blood_group">
						<label>Blood Group</label>
					</div>
				</div>
				<center><button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button><center>
			</form>
			<br />
		</div>
		<script>
		$(document).ready(function() {
			Materialize.updateTextFields();
		});
	</script>
	</body>
</html>
