<?php session_start(); ?>
<?php

 
$con = mysqli_connect("127.0.0.1","root","","mpit2021fin");
$text_query =  "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
$query = mysqli_query($con, $text_query);
  	
$result = $query->fetch_assoc();


	$text_zaprosa_vstavit = "UPDATE users SET steps = '{$_POST["total"]}' WHERE id = '{$_SESSION['id']}'";
	$query_insert = mysqli_query($con, $text_zaprosa_vstavit);






?>
