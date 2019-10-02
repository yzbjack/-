<?php

	
if(isset($_POST["user"])){
	echo $_POST["user"];	
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<form action="" method="post">
<input type="text" name="user" size=80>
<input type="submit" name="submit" value="登录">

</form>
<body>
</body>
</html>