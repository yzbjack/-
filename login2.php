<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录</title>
</head>
<?php
session_start();
if($_SESSION['username']!=''){
header("location:myPage.php");
}
if(isset($_POST['token']) and $_POST['token']=="login")
{
$username=trim($_POST['username']);
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","secondproduct") or die("数据库连接失败");


$sql="select * from user where merchant='$username'";
$sql2=mysqli_query($conn,$sql);
$info=mysqli_fetch_array($sql2);

$result=mysqli_query($conn,$sql)or die("查询失败,请检查sql语句");
if($info['password']==$password)
   {
	  // session_start();
	   $_SESSION['username']=$username;
	   $_SESSION['password']=$password;
	header("location:myPage.php");
   }
else
	echo "<div align='center'>用户口令不正确</div>";
}
?>
<style type="text/css">
#form{
	text-align:center;
	margin:20px auto;
	width:400px;
	height:200px;
	background-color:#F93;
}
#title{
	align="center" line-height:20px
	margin:10px;
	padding:20px;
	
	}
</style>
<body>
<div id="form">
<form action="" method="POST" enctype="application/x-www-form-urlencoded" >
  <div align="center">
  <div id="title">三峡学院服务中心登录</div>
  <table>
  <tr>
 <td> 用户名: </td><td><input name="username" type="text"  id="username" /></td></tr>
 <tr>
   <td>密  码：</td>
  <td><input name="password" type="password"  id="password"/></td></tr>
 <tr><td colspan="2"> <input  type="submit" value="提交" /></td></tr>
    
    <input type="hidden" name="token" value="login">
  </form>  
  </div>


</body>
</html>
