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
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$gender=$_POST['gender'];
$branch=$_POST['branch'];
$resume=$_POST['resume'];
$password=$_POST['password'];
$result=mysql_query("insert into tbljobreg values('$fullname','$fathername','$mothername','$email','$contactno','$day','$month','$year','$address','$city','$state','$gender','$branch','$resume','$password')");
if(!$result)
{
die('error:'.mysql_error());
}
echo "connection successfully";
mysql_close($conn);
?>