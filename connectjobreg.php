<?php
$host="localhost";
$user="root";
$pass="";
$conn = mysqli_connect($host, $user, $pass, "campusdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
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
if(mysqli_query($conn, "insert into tbljobreg values('$fullname','$fathername','$mothername','$email','$contactno','$day','$month','$year','$address','$city','$state','$gender','$branch','$resume','$password')"))
{
    echo "connection successfully";
}else{
    echo "Error .. Please Contact To Developer Team";

}
mysqli_close($conn);
?>