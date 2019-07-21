<?php
ob_start();
session_start();
require_once 'dbconnect.php';

$res = $conn->query("SELECT * FROM ");
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>