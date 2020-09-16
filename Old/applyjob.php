<?php
	session_start();
	if(!isset($_SESSION['email']))
	{
		header("Location:studentlogin.php");
	}


 


?>



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


			if (isset($_GET['id']))
			{
					
								

								
	
		$b1=$_SESSION['email'];
    
			$id=$_GET['id'];
			mysql_query("insert into applieduser(comid,email,status) values('$id','$b1','no')");

			echo "<script>alert('applied successfully...!');document.location='viewcompany.php3'</script>";
			exit();
			}
			?>