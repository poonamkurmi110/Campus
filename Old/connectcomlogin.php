<?php
$host="localhost";
$user="root";
$pass="";
session_start();
$conn=mysql_connect($host,$user,$pass);
mysql_select_db("campusdb");
$email=$_POST['email'];
$password=$_POST['password'];
if(!$conn)
{
die('could not connect:' .mysql_error());
}
$result=mysql_query("select * from tblcomreg where email='$email' and password='$password' ")
or die(mysql_error());
$row=mysql_fetch_array($result);
if($row['email'] == $email && $row['password'] == $password)
{
$_SESSION['email']=$email;
header('location:welcomecom.php3');
}
else
{
echo "incorrect username or password";
} 


mysql_close();
?>