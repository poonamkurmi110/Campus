<?php
$host="localhost";
$user="root";
$pass="";
$conn = mysqli_connect($host, $user, $pass, "campusdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$message=$_POST['message'];
$result=mysqli_query($conn,"insert into tblcontact(fullname,email,message)values('$fullname','$email','$message')");
if(!$result)
{
echo "connection successfully";
}else{

    echo "Error";
}
mysqli_close($conn);
