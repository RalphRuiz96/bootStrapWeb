<?php 
session_unset();
session_destroy();
$_SESSION['count1'] = 0;
$_SESSION['count2'] = 0;
header("Location: predictor.php"); ?>
