<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<script type="text/javascript">

function confirm(ID){
location.href="del.php?ID="+ID;	
}
function update(ID){
location.href="update.php?ID="+ID;	
}v
</script>
</head>

<body>
<?php
session_start();
require_once('conn.php');
$username=$_SESSION['username'];
//echo $username;
$sql=mysqli_query($mysqli,"select * from product where merchant='$username'");
//$result=mysqli_query($mysqli,$sql);
$rows=mysqli_fetch_array($sql);
//print_r($rows);

?>
<table width="368" height="46" border="1" align="center">
  <caption>
    我的商品
    <br>
    <a href="AddData2.php">添加商品 </a><a href="SecondHandMarket.php">返回二手市场</a><br>
  </caption>
  <tr>
    <th width="24" height="40" scope="col">ID</th>
    <th width="86" scope="col">商品名称</th>
    <th width="58" scope="col">价格</th>
    <th width="61" scope="col">QQ联系</th>
    <th width="105" scope="col">操作</th>
  </tr>
  <?php do{
	  ?>
  <tr>
    <td width="24"><?php echo $rows[0];?></td>
    <td width="86" ><?php echo $rows[1];?></td>
    <td width="58" ><?php echo $rows[2];?></td>
    <td width="61" ><?php echo $rows[3];?></td>
    <td width="105" ><a href="#"  onClick="confirm(<?php echo $rows[0]?>)">删除</a>|<a href="#"  onClick="update(<?php echo $rows[0]?>)">修改</a></td>
  </tr>
  <?php
  }while($rows=mysqli_fetch_array($sql));
  ?>
</table>



</body>
</html>