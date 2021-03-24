<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</html>
<?php
    session_start();
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db = 'test';
    $link = mysqli_connect($host,$user,$password,$db) or die(mysqli_error($link));
    mysqli_query($link,"SET NAMES 'utf8");



