<?php session_start(); ?>
<?php

 
$con = mysqli_connect("mysql.09-15-pn.myjino.ru","09-15-pn","IT.SCHOOL123","09-15-pn_nikita-alekseev");
$text_query =  "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
$query = mysqli_query($con, $text_query);
  	
$result = $query->fetch_assoc();


	$text_zaprosa_vstavit = "UPDATE users SET steps = '{$_POST["totalst"]}' WHERE id = '{$_SESSION['id']}'";
	$query_insert = mysqli_query($con, $text_zaprosa_vstavit);

	$text_zaprosa_vstavit2 = "UPDATE teams SET total = '{$_POST["totalst2"]}' WHERE id = '{$_SESSION['id']}'";
	$query_insert2 = mysqli_query($con, $text_zaprosa_vstavit2);






?>
