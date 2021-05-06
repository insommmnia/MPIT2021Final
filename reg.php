<?php session_start(); ?>
<?php

	$img_dir = 'img/';
	$img_name = $img_dir.basename($_FILES['img']['name']);
	$upload = move_uploaded_file($_FILES['img']['tmp_name'], $img_name);

	 $connect = mysqli_connect("127.0.0.1","root","","mpit2021fin");
      
	$text_query = "SELECT * FROM users WHERE mail = '{$_POST["email"]}' ";
 	$query = mysqli_query($connect, $text_query);
 	$result = $query->fetch_assoc();





 	

	if ($_POST["email"] == $result['mail']) {
		header('Location: log.php?error=такой пользователь занят');
	}else{
  $text_zaprosa_vstavit = "INSERT INTO users (name, surname, mail, age, img, password)
            VALUES
            ('{$_POST["name"]}', 
            '{$_POST["surname"]}',
            '{$_POST["email"]}',
            '{$_POST["age"]}', 
            '{$img_name}',
        	'{$_POST["password"]}')";
  $query_insert = mysqli_query($connect, $text_zaprosa_vstavit);
  

  header('Location: reg2.php?email='.$_POST["email"].'');
	}

	
	
?>