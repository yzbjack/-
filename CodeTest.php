<?php
$conn=mysqli_connect("localhost","root","","secondproduct") or die("数据库连接失败");
mysqli_query($conn,'set names utf8');

$sql="select * from product";
$result=mysqli_query($conn,$sql) or die("数据查询失败");
//$row=mysqli_fetch_row($result);
//print_r($row);
?>