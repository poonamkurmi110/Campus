<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
mysql_select_db("campusdb");
if(!$conn)
{
die('could not connect:'.mysql_error());
}
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$message=$_POST['message'];
$result=mysql_query("insert into tblcontact(fullname,email,message)values('$fullname','$email','$message')");
if(!$result)
{
die('error:'.mysql_error());
}
echo "connection successfully";
mysql_close($conn);
?>
