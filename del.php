<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
require_once("conn.php");
$ID=$_GET['ID'];
//$sql="delete from product where ID=$ID";

if(mysqli_query($mysqli,"delete from product where ID=$ID")){
echo "<script>alert('删除成功');</script>";
header("refresh:1;url=myPage.php");
}else{
echo "删除失败";	
}
?>
</body>
</html>