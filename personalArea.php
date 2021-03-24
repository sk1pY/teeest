<h1>Редактирование своих данных</h1>
<a href="index.php">main</a>
<?php
include 'connect.php';
function edit($link)
{
    if (isset($_POST['submit'])) {
        $id = $_SESSION['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $otch = $_POST['otch'];
        $query = "update users1 set
        name ='$name',surname = '$surname',otch = '$otch' where id ='$id'";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }
}
function getContentEdit($link)
{
    $id = $_SESSION['id'];
    $query = "SELECT * from users1 where id='$id'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $isPage = mysqli_fetch_assoc($result);
    if ($isPage) {
        $name = $isPage['name'];
        $surname = $isPage['surname'];
        $otch = $isPage['otch'];

        echo '<form  method="POST">
                <input type="text" value = "' . $name . '" name="name" placeholder="title">
                <input type="text" value = "' . $surname . '" name="surname" placeholder="url">
                <input type="text" value = "' . $otch . '" name="otch" placeholder="text">
                <input type="submit" name="submit">
                   </form>';
    }
}


    if($_SESSION['auth'] == true){
        edit($link);
        getContentEdit($link);
    }else{
        header('location: login.php');
    }
    ?>


