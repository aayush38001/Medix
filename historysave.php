<?php include_once("analyticstracking.php") ?>
<?PHP
	session_start();
	include 'doctornav.php';
	include 'conn.php';
	$date = (string) $_POST['date'];
	$history = (string) $_POST['history'];
	$patient_aadhaar=$_SESSION['patient_aadhaar'];
	//$sql="INSERT INTO `a".$patient_aadhaar."`(`pre`, `appointment_date`) VALUES ('".$history."','".$date."')";
	$sql="INSERT INTO `a".$patient_aadhaar."`(`pre`, `appointment_date`, `arrival_date`) VALUES ('".$history."','".$date."','".date("Y-m-d")."')";
	mysql_query($sql);
	echo "<script>
            alert('Prescription Saved.');
            </script>";
            echo '<script>window.location="doctorlogged.php";</script>';
?>
