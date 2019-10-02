<?php
$con = @mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else{
	echo "连接成功";
}
// some code
@mysql_select_db("user", $con);

mysql_query("INSERT INTO user (userName,password) 
VALUES ('Pete','76767')");




mysql_close($con);
?>