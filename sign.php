<?php
require_once("db.php");

$post = $_POST;
$name = $post['name'];
$age = $post['age'];
$sex = $post['sex'];
$email = $post['email'];
$password = $post['password'];
$password = md5($password);

//插入记录
$insertsql = "insert into user (
	name,
	age,
	password,
	sex,
	email
) values (
	 '{$name}',
            '{$age}',
            '{$password}',
            '{$sex}',
            '{$email}'
)";

//echo $insertsql;
$dbh->exec($insertsql);
//print_r($result);
//echo "注册成功";

$sql = 'SELECT * FROM user';// sql 语句 查
foreach ($dbh->query($sql) as $row) {
	$row['name'];
}
$_SESSION['name'] = $row['name'];
header("Location:index.php");
