<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<form method="post" action="">
<select name="select" size="1">


<option value="计算机类" selected>计算机</option>
<option value="人文类" selected>人文类</option>
<option value="自然科学类" selected>自然科学类</option>




</select>
<input type="submit" name="submit" value="提交">
</form>
<body>
<?php
if(isset($_POST['submit']) and $_POST['submit']=="提交"){
	
echo "你选择的图书类型为:".$_POST['select'];	
}

?>

</body>
</html>
