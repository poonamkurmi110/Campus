<?php
$host="localhost";
$user="root";
$pass="";
session_start();
$conn=mysql_connect($host,$user,$pass);
mysql_select_db("campusdb");
if(!$conn)
{
die('could not connect:'.mysql_error());
}
$username=$_POST['username'];
$password=$_POST['password'];
$result=mysql_query("select * from tbladmin where username='$username' and password='$password' ");
if(!$result)
{
die('error:'.mysql_error());
}
$row=mysql_fetch_array($result);
if($row['username']==$username&&$row['password']==$password)
{
header('location:welcomeadmin.php3');
}
else
{
echo "<script> alert('Incorrect username or password'); document.location = 'adminlogin.php3';</script>";
}
mysql_close($conn);
?>
