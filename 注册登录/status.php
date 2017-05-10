<?php
require_once("db.php");
$post = $_POST;
$status = $post['status'];
$username = $_SESSION['name'];

$sql = "update user set status = {$status} where name = '{$username}'";
$dbh->exec($sql);

$_SESSION['status'] = $status;
header("Location:index.php");
