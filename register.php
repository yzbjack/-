<?php
$con = @mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("user", $con);


$userName=$_POST["userName"];
$password=$_POST["userPwd"];


$result=mysql_query("INSERT INTO user (userName, password) 
VALUES ($userName, $password)");
if($result)
{
	echo "<script>";
	echo "alert('jk');";
	echo "</script>";
	
	
	
	header("location:main.html");
}

mysql_close($con);
?>