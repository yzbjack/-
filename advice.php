<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<?php

require("conn.php");
if($_POST['submit']!=""){

$advice=$_POST['textarea'];
$sql="insert into advice(advice) values('$advice')";
if(mysqli_query($mysqli,$sql)){

echo "反馈成功";
echo "<br />";
echo '<a href="SecondHandMarket.php">返回二手市场</a>';	
}else{
	
echo "反馈失败";	
}
	
	
}


?>


<body>
</body>
</html>