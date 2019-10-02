

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>二手市场</title>
</head>
<style type="text/css">

a{
	list-style: none;
	
	text-decoration: none;
	
	
}
#head{
background-color:#FF0;
	
}
</style>

<body>
<div align="center" id="head">
  <h1>二手市场</h1>
  <h2><a href="login2.php">登录</a> 
    <a href="register.html">注册</a>
  </h2>
  
  
</div>
<div id="donate">
  <div align="center"></div>
</div>
<p align="center">小额资助本站，资助将用于购买服务器</p>
<p align="center">扫一扫资助本站</p>
<p align="center"><img src="IMG_20190601_165506.jpg" width="151" height="125"  alt=""/></p>
<form id="form1" name="form1" method="post" action="ProductDb.php">
  <p align="center">输入查询你想要商品:
    <input type="text" name="productName" id="productName" required>
    <input type="submit" name="submit" id="submit" value="查询">
  </p>
  <p align="center"><a href="advice.html">意见反馈</a> </p>
  <p align="center">Tip:注册登录即可发布闲置二手商品</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
<?php
require_once('CodeTest.php');
require_once('conn.php');
$sql="select * from product  ";
$result=mysqli_query($mysqli,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
//printf($row);
?>

<?php
foreach($rows as $row){
	?>
	<table align="center">
	<tr><?php echo $row['ID'];?></tr>
	<tr><?php echo $row['name'];?></tr>
	</table>
<?php } ?>;


</html>
