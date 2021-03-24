<?php
include "connect.php";

$query = "select * from users1 ";
$res = mysqli_query($link,$query) or die(mysqli_error($link));
//$result = mysqli_fetch_assoc($res);
for($data =[];$row = mysqli_fetch_assoc($res);$data[] = $row);
?>
<table style='margin: 1%;width: 800px' class="table table table-success table-hover">
    <tr>
        <th>имя</th>
        <th>фамилия</th>
    </tr>
    <?php
foreach ($data as $elem)
{
    $content .= "<tr>
        <td>{$elem['name']}</td>
        <td>{$elem['surname']}</td>
        </tr>";
}
$content .= '</table>';
echo $content;
?>
    <a href="index.php">MAIN</a>
