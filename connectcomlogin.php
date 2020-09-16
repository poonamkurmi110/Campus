<?php
$host = "localhost";
$user = "root";
$pass = "";
session_start();
$conn = mysqli_connect($host, $user, $pass, "campusdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST['email'];
$password = $_POST['password'];
$result = mysqli_query($conn, "select * from tblcomreg where email='$email' and password='$password' ");
$row = mysqli_fetch_array($result);
if ($row['email'] == $email && $row['password'] == $password) {
    $_SESSION['email'] = $email;
    header('location:welcomecom.php');
} else {
    echo "incorrect username or password";
}

