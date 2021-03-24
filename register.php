<?php
include 'connect.php';
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}
echo '<br>';
if(isset($_POST['submit'])) {
//    if(!empty($_POST['login']) and !empty($_POST['password']))
    $login = $_POST['login'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
//    $confirmPass = md5($_POST['confirmPass']);
    $email = $_POST['email'];
    $date = $_POST['date'];
    $date = date('Y-m-d');
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $otch = $_POST['otch'];
    $query = "SELECT count(*) as count FROM users1 WHERE email='$email'";
    $res = mysqli_query($link, $query) or die(mysqli_error($link));
    $result = mysqli_fetch_assoc($res)[count];
    if(empty($result)){
//        $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);
//        if(check_length($login,1,2)  && $password == $confirmPass){
            $query = "insert into users1 set
                login = '$login',password ='$password',email ='$email',name ='$name',banned = '0',status_id = 'user',surname ='$surname',otch ='$otch',date ='$date',registration_date='$date'";
            $res_r = mysqli_query($link, $query) or die(mysqli_error($link));
            $user = mysqli_fetch_assoc($res_r);

            $_SESSION['auth'] = true;
            $_SESSION['login'] = $login;
            $_SESSION['status'] = user['status'];

        header('location: index.php');
        }else {
            echo "првоерь веденные данные";
        }
}else{
    echo 'vvedite log pass';
}
?>
<form action="" method="post" style="margin: 5%">
    <label for="email">email </label>
    <input  type="email" name="email" autocomplete="off">
    <br>
<!--    lichnaya infa-->
    <label for="name">ИМЯ </label>
    <input  type="text" name="name">
    <br>
    <label for='surname'>ФАМИЛИЯ </label>
    <input  type="text" name="surname">
    <br>
    <label for="otch">ОТЧЕСТВО </label>
    <input  type="text" name="otch">
    <br>
    <label for="date">ДАТА РОЖДЕНИЯ </label>
    <input  type="date" name="date">
    <br>

    <label for="login">login </label>
    <input  name="login"> <br>
    <label for="password">password </label>
    <input type="password" name ='password'> <br>
    <label for="password">confirmPASS </label>
    <input name="confirmPass" type="text">
    <input class="btn btn-success" type="submit" name ='submit'>
</form>