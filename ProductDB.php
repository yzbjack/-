

<!doctype html>
<html>

<head>
    <meta charset="utf-8">


    <title>商品列表</title>

</head>
<body>

<h1 align="center">
    商品列表
</h1>

<?php

require_once('conn.php');

if($_POST['submit']=='查询'){
$商品名称=$_POST['productName'];
$sql=mysqli_query($mysqli,"select * from product where name like '%$商品名称%'");
$info=mysqli_fetch_array($sql);
//print_r($info);
}
?>
<?php
if($info==false){
	echo "<div align='center' style='color:#FF0000;font-size:12px'>
	对不起，您检索的东西不存在!</div>";
}
?>
	
<div align="center">
<table width="265" border="1" >
  <tr>
    <th width="124" scope="col">产品</th>
    <th width="44" scope="col">价格</th>
    <th width="75" scope="col">QQ</th>
  </tr>
  <?php do{
	  ?>
  <tr>
    <td><?php echo $info[1];?></td>
    <td><?php echo $info[2];?></td>
    <td><?php echo $info[3];?></td>
  </tr>
  <?php 
  }while($info=mysqli_fetch_array($sql));
  ?>
  
</table>

</div>
</body>

</html>
