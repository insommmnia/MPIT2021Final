<?php session_start(); ?>
<?php

	 $connect = mysqli_connect("127.0.0.1","root","","mpit2021fin");
      
	$text_query = "SELECT * FROM users WHERE mail = '{$_POST["email"]}' AND password = '{$_POST["password"]}'";
 	$query = mysqli_query($connect, $text_query);

 	$result = $query->fetch_assoc();

 	if (mysqli_num_rows($query) > 0) {
 		$_SESSION['id'] = $result['id'];
 		header('Location: profile.php');
 	}else{
 		header('Location: log2.php?error=Неверный логин или пароль');
 	}

?>