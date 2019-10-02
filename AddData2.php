<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>


<?php
require_once('conn.php');
session_start();
if(isset($_POST['token'])&& $_POST['token']=="add"){



echo "用户名: ".$_SESSION['username']."<br>";
$username=$_SESSION['username'];
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

$sql="insert into product(name,price,QQ,merchant) values('$name','$price','$QQ','$username')";

if(mysqli_query($mysqli,$sql)){

echo "添加成功";
	
}else{
echo "添加失败";	
}

}

?>
<body>
<div align="center">
<form method="post" action="">

  <p>
  名字：
    <input type="text" name="name">
  <br/>
  价格：
  <input type="text" name="price">
  <br/>
  Q Q: &nbsp; 
  <input type="text" name="QQ">
  </p>
  <p><br/>
    <input type="submit" value="提交">
    <input type="hidden" name="token" value="add">
  </p>
  <p><a href="myPage.php">返回我的商品</a></p>
</form>
</div>
</body>
</html>