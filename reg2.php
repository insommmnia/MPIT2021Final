<?php session_start(); ?>
<?php  

	 $con = mysqli_connect("mysql.09-15-pn.myjino.ru","09-15-pn","IT.SCHOOL123","09-15-pn_nikita-alekseev");
	$text_query = "SELECT * FROM users WHERE mail = '{$_GET["email"]}' ";
	
	$query = mysqli_query($con, $text_query);
 	$result = $query->fetch_assoc();


	$text_zaprosa_vstavit2 = "INSERT INTO steps (userid) VALUES ('{$result['id']}')";
            
	$query_insert2 = mysqli_query($con, $text_zaprosa_vstavit2);





 	$_SESSION['id'] = $result['id'];
 	header('Location: profile.php');

?>