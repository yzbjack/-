<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>


<?php
session_start();
if(isset($_POST['token'])&& $_POST['token']=="add"){



echo "用户名: ".$_SESSION['username']."<br>";
//$username=$_SESSION['username'];
$name=$_POST['name'];
$price=$_POST['price'];
$QQ=$_POST['QQ'];
echo $name;
echo "<br/>";
echo $price;	
echo "<br/>";
echo $QQ;
echo "<br/>";
//echo $username;
}

?>
<body>
<div align="center">
<form method="post" action="">

<input type="text" name="name">
<br/>
<input type="text" name="price">
<br/>
<input type="text" name="QQ">
<br/>
<input type="submit">
<input type="hidden" name="token" value="add">
</form>
</div>
</body>
</html>