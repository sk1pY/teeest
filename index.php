<a href="login.php">страница авторизации</a>
<a href="register.php">регистрация</a>
<a href="logout.php">destroy</a>
<a href="profile.php">ПРОФИЛЬ</a>
<a href="user.php">ЮЗЕРЫ</a>
<a href="changePassword.php">сменить пароль</a>


<?php
include 'connect.php';
    if(!empty($_SESSION['auth'])){
        echo  "Вы зашли как: " . $_SESSION['login'];
        echo "<br>";
        echo  " Ваш статус " . $_SESSION['status'];
        if($_SESSION['status'] == 'admin'){
            $content = "<a class = \"btn btn-danger\" href='admin.php'>АДМИН</a>";
            echo $content;
        }
       ?>
        <h1>только для авторизованных</h1>
        <h1>только для авторизованных</h1>
        <h1>только для авторизованных</h1>
        <h1>текст который видят все</h1>
        <h1>текст который видят все</h1>
        <h1>текст который видят все</h1>
        <h1>текст который видят все</h1>
        <h1>текст который видят все</h1>
<?php

}else{
        ?>
<h1>текст который видят все</h1>
<h1>текст который видят все</h1>
<h1>текст который видят все</h1>
<h1>текст который видят все</h1>
<h1>текст который видят все</h1>

<?php
    }
?>
