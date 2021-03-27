<?php

session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_POST['user'];
$passw=$_POST['password'];
$pass=md5(passw);
$s="select * from user where name= '$name' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num==1) 
{
	echo"username already taken";
}
else
{
	$reg="insert into user(name,password) values ('$name','$pass' )" ;
	mysqli_query($con,$reg);
	echo" Registration Successful";
}
?>