<?php include_once("analyticstracking.php") ?>
<?php
session_start();
session_destroy();
header("location:index.php");
exit(0);
?>
