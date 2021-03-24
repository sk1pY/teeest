<a class="btn btn-primary" href="/">MAIN</a>
<?php
include "connect.php";
function deleteProfile($link){
if(isset($_GET['del'])){
        $id = $_GET['del'];
        $query = "DELETE FROM users1 where id ='$id'";
        mysqli_query($link, $query);
       echo "success";
}
}
function makeAdmin($link){
    if($_GET['admin']){
        $id = $_GET['admin'];
        $query = "update users1 set status = 'admin' where id= '$id'";
        mysqli_query($link,$query) or die(mysqli_error($link));
    }
}
function makeAdmin_cancel($link){
    if($_GET['admin_cancel']){
        $id = $_GET['admin_cancel'];
        $query = "update users1 set status = 'user' where id= '$id'";
        mysqli_query($link,$query) or die(mysqli_error($link));
    }
}
function bannedUser($link){
    if(isset($_GET['banned'])){
        $banned_id = $_GET['banned'];
        $query = "UPDATE users1 SET banned = '1' WHERE id='$banned_id'";
        mysqli_query($link,$query) or mysqli_error($link);
    }
}
function bannedUser_off($link){
    if(isset($_GET['banned_off'])){
        $banned_id_off = $_GET['banned_off'];
        $query = "UPDATE users1 SET banned = '0' WHERE id='$banned_id_off'";
        mysqli_query($link,$query) or mysqli_error($link);
    }
}

function shoInfo($link){
if (!empty($_SESSION['auth']) and $_SESSION['status'] == 'admin'){
echo 'конгратц к этой страице имеют досутп только алмины уауау';
$query = "select  * from users1";
$res = mysqli_query($link,$query) or die(mysqli_error($link));
for($data = [];$row = mysqli_fetch_assoc($res);$data[] = $row);
?>
<table style='margin: 1%;width: 800px' class="table table table-success table-hover">
    <tr>
        <th>Логин</th>
        <th>Права</th>
        <th>Статус</th>
        <th>Удалить пользователя</th>
        <th>Сменить статус</th>
        <th>Сменить статус на юзера</th>
        <th>Забанить пользователя</th>
        <th>Разбанить пользователя</th>

    </tr>
    <?
    foreach ($data as $elem) {
        $content .= "<tr>
        <td>{$elem['login']}</td>
        <td>{$elem['status_id']}</td>
        <td>{$elem['banned']}</td>
        <td><a class = \"btn btn-primary\" href='?del={$elem['id']}'>удалить пользователя</a></td>
        <td><a class = \"btn btn-success\" href='?admin={$elem['id']}'>сделать админом</a></td>
        <td><a class = \"btn btn-warning\" href='?admin_cancel={$elem['id']}'>сделать обычным юзером</a></td>
        <td><a class = \"btn btn-danger\" href='?banned={$elem['id']}'>забанить пользователя</a></td>
        <td><a class = \"btn btn-success\" href='?banned_off={$elem['id']}'>разбанить пользователя</a></td>



    </tr>";
    }
    $content .= '</table>';
    echo $content;
    }else{
        echo 'ты не админ кекек';
    }
}
    makeAdmin_cancel($link);
    makeAdmin($link);
    bannedUser_off($link);
    bannedUser($link);
    deleteProfile($link);
    shoInfo($link);
?>

