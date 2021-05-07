<?php 
  session_start();
 ?>
<?php
  $img_dir = 'img/';
  $img_name = $img_dir.basename($_FILES['img']['name']);
  $upload = move_uploaded_file($_FILES['img']['tmp_name'], $img_name);



     $con = mysqli_connect("mysql.09-15-pn.myjino.ru","09-15-pn","IT.SCHOOL123","09-15-pn_nikita-alekseev");

  $text_query =  "SELECT * FROM users WHERE id = {$_SESSION['id']}";

    $query = mysqli_query($con, $text_query);
    
    $result = $query->fetch_assoc();

  
    $text_zaprosa_vstavit = "UPDATE users SET mail = '{$_POST["mail"]}', password = '{$_POST["password"]}', img = '{$img_name}', name = '{$_POST["name"]}', surname = '{$_POST["surname"]}', age = '{$_POST["age"]}' WHERE id = {$_SESSION['id']}";
            
  $query_insert = mysqli_query($con, $text_zaprosa_vstavit);
  
     header('Location: profile.php');
  
 
 
  


?>
