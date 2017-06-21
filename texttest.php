
<HTML>
<head>
<title>MY_Text</title>
<link rel="icon" href="https://www.materialui.co/materialIcons/communication/textsms_black_192x192.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
</head>
<nav style="opacity:0.8;">
<div class="nav-wrapper Blue">
<a href="index.php" class="brand-logo"><font >MY_Text</font></a>
<ul id="nav-mobile" class="right hide-on-med-and-down">
<li><a href="#"></a></li>
</ul>
</div>
</nav>
<style>
.parallax
{
background-image: url("images/back.jpg");
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
opacity:1;
}
/ LABEL/
label
{
color:#999;
font-size:18px;
font-weight:normal;
position:absolute;
pointer-events:none;
left:5px;
top:10px;
transition:0.2s ease all;
-moz-transition:0.2s ease all;
-webkit-transition:0.2s ease all;
}
/ active state /
input:focus ~ label, input:valid ~ label
{
top:-20px;
font-size:14px;
color:#5264AE;
}
/ active state /
input:focus ~ .bar:before, input:focus ~ .bar:after
{
width:50%;
}
</style>
</head>
<body class="parallax">
<?PHP
error_reporting(0);
$email_id = "";
$my_text = "";
$email_id = (string) $_POST['email_id'];
$my_text = (string) $_POST['my_text'];
echo "<p>".$email_id."</p><br/>";
echo "<p>".$my_text."</p><br/>";
?>

<div class="container" style="background:White; opacity:0.7;border-radius:25px; padding:20px 30px 0px 30px">
<form action="index.php" method="post">
<div class="row">
<div class="input-field col s11" >
<textarea id="textarea" required class="materialize-textarea" name="my_text"></textarea>
<label for="textarea">My Text</label>
</div>
</div>
<div class="row">
<div class="col s12">
<div class="input-field inline">
<input id="email" required type="email" class="validate" name="email_id">
<label for="email" data-error="wrong" data-success="right">Email</label>
</div>
</div>
</div>
<br/>
<div class="row">
<button class="waves-effect waves-light btn" type="submit" name="action" >Submit</button>
</div>
</form>
<br />
</div>
<!-- Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
<script type="text/javascript" src="/socket.io/socket.io.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>
</body>
</HTML>