<?php
ob_start();
session_start();
require_once 'dbconnect.php';

$res = $conn->query("SELECT * FROM users");
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

<tr>
    <td><?php echo $id ?></td>
    <td><?php echo $data["username"];?></td>
    <td><?php echo $data["email"];?></td>
    <td><?php echo $data["password"];?></td>
</tr>

?>