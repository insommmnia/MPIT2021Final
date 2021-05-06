<?php session_start(); ?>
<?php

 
$con = mysqli_connect("127.0.0.1","root","","mpit2021fin");
$text_query =  "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
$query = mysqli_query($con, $text_query);
  	
$result = $query->fetch_assoc();
$code = $_POST["code"];

	$text_zaprosa_vstavit = "UPDATE users SET idfriend = '{$_SESSION['id']}' WHERE friendcode = '{$code}'";
	$query_insert = mysqli_query($con, $text_zaprosa_vstavit);






?>
