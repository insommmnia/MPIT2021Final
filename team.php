<?php session_start(); ?>
<?php

 
$con = mysqli_connect("mysql.09-15-pn.myjino.ru","09-15-pn","IT.SCHOOL123","09-15-pn_nikita-alekseev");
$text_query =  "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
$query = mysqli_query($con, $text_query);
  	
$result = $query->fetch_assoc();
$teamid = $_POST["inviteid"];

	$text_zaprosa_vstavit = "UPDATE users SET idteam = '{$_SESSION['id']}' WHERE id = '{$_POST["inviteid"]}'";
	$query_insert = mysqli_query($con, $text_zaprosa_vstavit);






?>
