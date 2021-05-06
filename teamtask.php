<?php session_start(); ?>
<?php

 
$con = mysqli_connect("127.0.0.1","root","","mpit2021fin");
$text_query =  "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
$query = mysqli_query($con, $text_query);
  	
$result = $query->fetch_assoc();

$text_zaprosa_vstavit2 = "UPDATE users SET idteam = '{$_SESSION['id']}' WHERE id = '{$_POST["inviteid"]}'";
	$query_insert2 = mysqli_query($con, $text_zaprosa_vstavit2);

	
$text_zaprosa_vstavit = "INSERT INTO teams (id, task1) VALUES ('{$_POST["inviteid"]}', '150000')";
     
  $query_insert = mysqli_query($con, $text_zaprosa_vstavit);





?>
