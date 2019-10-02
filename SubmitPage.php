<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>




</head>

<?php  

if(isset($_POST['token'])&& $_POST['token']=="add"){
$name=$_POST['ProductNme'];
$price=$_POST['ProductPrice'];
$QQ=$_POST['QQ'];
echo $name;
echo "<br/>";
echo $price;
echo "<br/>";
echo $QQ;
echo "<br/>";

}
?>
<form name=,method="post" action="" >
  <input type="text" name="username">

<input type="password" name="password">
<input type="submit">
<input type="hidden" name="token" value="add">
</form>
  
</form>
</body>
</html>