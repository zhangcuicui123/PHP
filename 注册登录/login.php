<?php 
require_once("db.php");

$post = $_POST;
$name = $post['name'];
$password = $post['password'];

//一个sql语句
$sql = "select * from user where name = '{$name}'";
//一个结果集，值为sql语句
$select = $dbh->query($sql);   
//建立一个空数组，用来存放从表中查询到的数据
$user = [];
foreach ($select as $row) {
	$user = $row;
	
}
echo "<pre>";
//判断用户名是否存在在表中
if(empty($user)){
	header("Location:zhuce.php");
	return false;
}


//判断密码是否正确
$dbpassword = $user['password'];

if(md5($password) == $dbpassword){
	 $_SESSION['name'] = $user['name'];
	 $_SESSION['status'] = $user['status'];
	 header("Location:index.php");	 

}else{
	echo "密码错误";
	echo "<a href= 'login.html'>返回登录</a>";
}