<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<script>
function check(form){
if(form.username.value=="")
	{
	 alert("请输入昵称!");
	 form.username.select();
	 return(false);
	}else{
		return(true);
		}
}
</script>
</head>

<body>
<form method="post" action="formSubmit5.php" name="form1" onSubmit="return chenck(this)" >

<input type="text" name="username">
<input type="submit" name="submit">
</form>
</body>
</html>