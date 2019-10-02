<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
require_once('conn.php');
$sql="select * from product";
$result=mysqli_query($mysqli,$sql);

$info=mysqli_fetch_array($sql);
?>
<?php
do{
	
?>

<tr align="left" bgcolor="#6600FF">
<td height="20" align="center"><?php echo $info[0];?>
</td>

<td height="20" align="center"><?php echo $info[1];?>
</td>
<td height="20" align="center"><?php echo $info[2];?>
</td>
<td height="20" align="center"><?php echo $info[3];?>
</td>
<?php
}while($info=mysqli_fetch_array($result));
?>
<body>
</body>
</html>