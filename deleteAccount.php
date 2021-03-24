<?php
include 'connect.php';
 $id = $_SESSION['id'];
 $query = "SELECT * From users1 where id ='$id'";
 $res = mysqli_query($link,$query) or die(mysqli_error($link));
 $result = mysqli_fetch_assoc($res);

 $hash = $result['password'];
 var_dump($hash);
  if(password_verify($_POST['password'],$hash)){
      $query = "DELETE FROM users1 where id ='$id'";
      mysqli_query($link,$query);
      header('location: /');
  }else{
      echo 'пароль введен неверно';
  }
  ?>
<form action=""method="post">
    <input type="text" placeholder="введи свой пароль" name = 'password'>
    <input type="submit" value="delete account">
</form>
