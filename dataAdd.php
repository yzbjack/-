<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
include("conn.php");
session_start();
if(isset($username)){
$username=$_SESSION['username'];
$ProductName=$_POST['ProductName'];
$ProductPrice=$_POST['ProductPrice'];
$Productdesc=$_POST['Productdesc'];
$QQ=$_POST['QQ'];
mysqli_query($conn,"insert into product(name,price,QQ,owner) values('$ProductName','$ProductPrice','$QQ','$username')");
echo "<script>alert('添加成功')</script>;history.back();";
}else{
	
	echo "添加失败";
}


?>
</body>
</html>