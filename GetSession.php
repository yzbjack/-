<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
echo "用户名: ".$_SESSION['username']."<br>";
echo "密码： ".$_SESSION['password']."<hr>";
print_r($_SESSION);

?>
</body>
</html>