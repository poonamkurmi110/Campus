<?php
if (isset($_POST['submit'])) {
    $mobileno = $_POST['mobileno'];
    if (!is_numeric($mobileno)) {
        echo "<script type='text/javascript'>alert('Please Choose only numeric value for mobile no'); document.location = 'companyregistration.php'; </script>";
    }
    $state = $_POST['state'];
    if ($state == "none") {
        echo "<script type='text/javascript'>alert('Please select any state'); document.location = 'companyregistration.php'; </script>";
    }
    $branch = $_POST['branch'];
    if ($branch == "none") {
        echo "<script type='text/javascript'>alert('Please select any branch'); document.location = 'companyregistration.php'; </script>";
    }
    $website = $_POST['website'];
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        echo "<script type='text/javascript'>alert('Please enter right website'); document.location = 'companyregistration.php'; </script>";
    }
    $postno = $_POST['postno'];
    if (!is_numeric($postno)) {
        echo "<script type='text/javascript'>alert('Please enter numeric data only'); document.location = 'companyregistration.php'; </script>";
    }
    $designation = $_POST['designation'];
    if (!preg_match("/^[a-zA-Z\s]+$/", $designation)) {
        echo "<script type='text/javascript'>alert('Please enter right format'); document.location = 'companyregistration.php'; </script>";
    }
    $salary = $_POST['salary'];
    if (!is_numeric($salary)) {
        echo "<script type='text/javascript'>alert('Please enter numeric data only'); document.location = 'companyregistration.php'; </script>";
    }
}
$host = "localhost";
$user = "root";
$pass = "";
$conn = mysqli_connect($host, $user, $pass, "campusdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$companyname = $_POST['companyname'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobileno = $_POST['mobileno'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$branch = $_POST['branch'];
$website = $_POST['website'];
$postno = $_POST['postno'];
$designation = $_POST['designation'];
$salary = $_POST['salary'];
$sql_query = "insert into tblcomreg(companyname,email,password,mobileno,address,city,state,branch,website,postno,designation,salary)values('$companyname','$email','$password','$mobileno','$address','$city','$state','$branch','$website','$postno','$designation','$salary')";
if (mysqli_query($conn, $sql_query)) {
    echo "<h1>connection successfully.....</h1>";
}else{
    echo "<h1>Error Pelase contact to developer.....</h1>";
    echo($sql_query);

}

mysqli_close($conn);
