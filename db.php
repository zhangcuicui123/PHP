<?php 
header("Content-type: text/html; charset=utf-8");
session_start();
	$user = "root"; //数据库的用户名
	$pass = ""; //数据库的密码
	$host = 'localhost'; //主机地址
	$dbname = 'mydatabase'; //数据库名字
	$utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8');
	// 编码
	$dbh = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass,$utf8);
	// 表驱动法
	$status = [
	1 => '非常明白',
	2 => '比较明白',
	3 => '一般明白',
	4 => '懵逼',
	5 => '非常懵逼',
	6 => '跳楼'
	];
