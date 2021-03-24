<?php
include "connect.php";

if (!empty($_SESSION['auth']) and $_SESSION['status'] == 'admin') {
$id = $_SESSION['id'];
$query = "select * from users1 where id = '$id' ";
$res = mysqli_query($link,$query) or die(mysqli_error($link));
for($data =[];$row = mysqli_fetch_assoc($res);$data[] = $row);
$origin = date_create($data[0][date]);
$target = date_create(date('Y-m-d'));
$interval = date_diff($origin, $target);
$ok = $interval->format('%Y лет');
?>
<table style='margin: 1%;width: 800px' class="table table table-success table-hover">
    <tr>
        <th>имя</th>
        <th>фамилия</th>
        <th>отчество</th>
        <th>др</th>
    </tr>
    <?php
    foreach ($data as $elem)
    {

        $content .= "
    <tr>
        <td>{$elem['name']}</td>
        <td>{$elem['surname']}</td>
        <td>{$elem['otch']}</td>
        <td>$ok</td>
     </tr>";
    }
        $content .= '</table>';
    echo $content;


}else{
    echo 'ты не обладаешь такими правами для просмотра содержимого';
    }
    ?>
        <a href="personalArea.php">РЕДАКТИРОВАТЬ СВОИ ДАННЫЕ</a>
        <br>
        <a href="deleteAccount.php">УДАЛИТЬ СВОЙ АККАУНТ</a>
