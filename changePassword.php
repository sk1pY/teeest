<?php
    include 'connect.php';
    $id = $_SESSION['id'];

    $query = "SELECT * from users1 where id = '$id'";
    $res = mysqli_query($link,$query) or die(mysqli_error($link));
    $result = mysqli_fetch_assoc($res);

    $hash = $result['password'];//solenii pass

    if(password_verify($_POST['old_password'],$hash)){
        echo 'ok';
        $newPasswordHash = password_hash($_POST['new_password'],PASSWORD_DEFAULT);
            $query = "UPDATE users1 SET password = '$newPasswordHash' WHERE id = '$id'";
            mysqli_query($link,$query);

    }else{
        echo 'Старый пароль введен неверно';
    }
        ?>
<form action="" method="post">
    <input type="text" name="old_password" placeholder="old">
    <input type="text" name="new_password" placeholder="new">
    <input type="text" name="new_password_repeat" placeholder="подтвердите пароль">

    <input type="submit">
</form>
