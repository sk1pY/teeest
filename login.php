<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</html>
<?php
include 'connect.php';
        $login = $_POST['login'];
        $query ="select * from users1 where login ='$login'";
        $res = mysqli_query($link,$query) or die(mysqli_error($link));
        $user = mysqli_fetch_assoc($res);

if(!empty($user))
        {
            $hash = $user['password']; //solenii pass
            if(password_verify($_POST['password'],$hash))
            {
                if($user['banned'] != 1){
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['status'] = $user['status_id'];
                    header("location: /index.php");
                    echo "++++++++";
                }else{
                    echo 'пользователь заблокирован1';
                }
            }else{
                echo 'пароль не верный';
            }
        }
         else {
            echo 'такого логина нет';
        }
    ?>

             <form  method="POST">
            <input name="login">
            <input name="password" type="password">
            <input class ="btn btn-primary" type="submit" value="Отправить">
            </form>
<a href="index.php">main</a>
