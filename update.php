<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
session_start();
require_once("conn.php");
$ID=$_GET['ID'];

$sql=mysqli_query($mysqli,"select * from product where ID='$ID'");
$info=mysqli_fetch_array($sql);

if(isset($_POST['token'])&& $_POST['token']=="update"){
	
	$username=$_SESSION['username'];
	$name=$_POST['name'];
    $price=$_POST['price'];
    //$QQ=$_POST['QQ'];
	$sql="update product set name='$name','$price' where name='$name' and merchant='$username'";
	if(mysqli_query($mysqli,$sql)){

echo "跟新成功";

	
}else{
echo "更新失败";	
}


	
	
	}


echo $info['name'];

?>
<form method="post" action="">
<table width="200" border="1" align="center">
  <caption>
    产品修改
  </caption>
  <tr>
    <td>产品名称</td>
    <td><input type="text" name="name" value="<?php echo $info['name']?>"></td>
  </tr>
  <tr>
    <td>价格</td>
    <td><input type="text" name="price" value="<?php echo $info['price']?>"></td>
  </tr>
  <tr>
  <td>
  <input type="submit" value="提交">
  </td><td>
  <input type="reset" value="重置">
  <input type="hidden" name="token" value="update">
  </td>
  </tr>
 
</table>


</form>
<body>
</body>
</html>