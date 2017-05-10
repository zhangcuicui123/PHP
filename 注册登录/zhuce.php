<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
	<form action="sign.php" method="post">
		<p>用户名</p><input type="text" name="name" />
		<p>密码</p><input type="password" name="password" />
		<p>邮箱</p><input type="text" name="email" />
		<p>年龄</p><input type="text" name="age" />
		<p>性别</p>
		男<input type="radio" name="sex" value="1" />
		女<input type="radio" name="sex" value="2" />
		<p><input type="submit" /></p>
	</form>
</body>
</html>
