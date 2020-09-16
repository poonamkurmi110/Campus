<?php
$host="localhost";
$user="root";
$pass="";
session_start();
$conn = mysqli_connect($host, $user, $pass, "campusdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username=$_POST['username'];
$password=$_POST['password'];
$result=mysqli_query($conn,"select * from tbladmin where username='$username' and password='$password' ");
if(!$result)
{
die('error:');
}
$row=mysqli_fetch_array($result);
if($row['username']==$username&&$row['password']==$password)
{
header('location:welcomeadmin.php');
}
else
{
echo "<script> alert('Incorrect username or password'); document.location = 'adminlogin.php';</script>";
}
mysqli_close($conn);
?>
