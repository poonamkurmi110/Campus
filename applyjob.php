<?php
session_start();
if (!isset($_SESSION['email'])) {
	header("Location:studentlogin.php");
}
?>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$conn = mysqli_connect($host, $user, $pass, "campusdb");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['id'])) {
	$b1 = $_SESSION['email'];
	$id = $_GET['id'];
	mysqli_query($conn, "insert into applieduser(comid,email,status) values('$id','$b1','no')");
	echo "<script>alert('applied successfully...!');document.location='viewcompany.php'</script>";
	exit();
}
?>