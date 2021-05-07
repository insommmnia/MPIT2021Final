<?php session_start(); ?>
<?php

 
$con = mysqli_connect("mysql.09-15-pn.myjino.ru","09-15-pn","IT.SCHOOL123","09-15-pn_nikita-alekseev");
$text_query =  "SELECT * FROM steps WHERE userid = '{$_SESSION['id']}'";
$query = mysqli_query($con, $text_query);
  	
$result = $query->fetch_assoc();
$steps = $result[date('l')] + $_POST["steps"];

$text_query2 =  "SELECT * FROM steps WHERE userid = '{$_SESSION['id']}'";
$query2 = mysqli_query($con, $text_query2);
  	
$result2 = $query2->fetch_assoc();
$day = date('l');




	$text_zaprosa_vstavit = "UPDATE steps SET $day = '{$steps}' WHERE userid = '{$_SESSION['id']}'";
	$query_insert = mysqli_query($con, $text_zaprosa_vstavit);






?>
