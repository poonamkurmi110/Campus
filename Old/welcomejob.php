<?php
session_start();
if($_SESSION['email']==true)
{
$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
mysql_select_db("campusdb");
$email=$_SESSION['email'];
if(!$conn)
{
die('could not connect:' .mysql_error());
}
$result=mysql_query("select * from tbljobreg where email='$email' ")
or die(mysql_error());
$row=mysql_fetch_array($result);
$branch=$row['branch'];
echo "<script> alert($branch); </script>";
}
else
{
header('location:studentlogin.php3');
}

?>


<html>
<head>
<title>Welcome Page</title>
<style>
.td{
color:#2B547E;
font-size:24px;
font-weight:bold;
}
.box
{
height:30px;
width:250px;
}
</style>
</head>
<body style="margin:0px;padding:0px">


<div style="height:8%;width:100%;background-color:#2B547E;padding-top:100px;padding-left:500px;font-size:30px;color:white">Welcome <?php echo $row['fullname']; ?></div>
<form method="POST" action="updatejob.php3">
<table style="height:92%;width:100%">
<tr>
<td style="width:20%;background-color:C8CABD">
<font size="5"><center>
<a href="viewcompany.php3" style="text-decoration:none">View Company Detail</a></br></br>
<a href="logoutjob.php3" style="text-decoration:none">LogOut</a></br></br>
</center></font>
</td>
<td>
<table align="center">
<tr>
<td style="color:#2B547E;font-size:30px;font-weight:bold;">View/Update Profile</br></br></td>
<td></td>
</tr>
<tr>
<td class="td">Full Name:</td>
<td><input type="text" name="fullname" class="box" value="<?php echo $row['fullname']; ?>" ></td>
</tr>
<tr>
<td class="td">Father's Name:</td>
<td><input type="text" name="fathername" class="box" value="<?php echo $row['fathername']; ?>" ></td>
</tr>
<tr>
<td class="td">Mother's Name:</td>
<td><input type="text" name="mothername" class="box" value="<?php echo $row['mothername']; ?>" ></td>
</tr>
<tr>
<tr><td class="td">Contact No.:</td>
<td><input type="text" name="contactno" class="box" value="<?php echo $row['contactno']; ?>" ></td>
</tr>
<tr>
<tr><td class="td">Email:</td>
<td><input type="text" name="email" class="box" value="<?php echo $row['email']; ?>" readonly="readonly"></td>
</tr>
<tr>
<td class="td">Date of Birth:</td>
<td><select name="day" style="height:30px;width:70px">
<option value="1" <?php if ($row['day'] == '1') echo 'selected'; ?>>1</option>
<option value="2" <?php if ($row['day'] == '2') echo ' selected="selected"'; ?>>2</option>
<option value="3" <?php if ($row['day'] == '3') echo ' selected="selected"'; ?>>3</option>
<option value="4" <?php if ($row['day'] == '4') echo ' selected="selected"'; ?>>4</option>
<option value="5" <?php if ($row['day'] == '5') echo ' selected="selected"'; ?>>5</option>
<option value="6" <?php if ($row['day'] == '6') echo ' selected="selected"'; ?>>6</option>
<option value="7" <?php if ($row['day'] == '7') echo ' selected="selected"'; ?>>7</option>
<option value="8" <?php if ($row['day'] == '8') echo ' selected="selected"'; ?>>8</option>
<option value="9" <?php if ($row['day'] == '9') echo ' selected="selected"'; ?>>9</option>
</select>
<select name="month" style="height:30px;width:100px">
<option value="January" <?php if ($row['month'] == 'January') echo 'selected'; ?>>January</option>
<option value="February" <?php if ($row['month'] == 'February') echo ' selected="selected"'; ?>>February</option>
<option value="March" <?php if ($row['month'] == 'March') echo ' selected="selected"'; ?>>March</option>
<option value="April" <?php if ($row['month'] == 'April') echo ' selected="selected"'; ?>>April</option>
<option value="May" <?php if ($row['month'] == 'May') echo ' selected="selected"'; ?>>May</option>
<option value="June" <?php if ($row['month'] == 'June') echo ' selected="selected"'; ?>>June</option>
<option value="July" <?php if ($row['month'] == 'July') echo ' selected="selected"'; ?>>July</option>
<option value="Augest" <?php if ($row['month'] == 'Augest') echo ' selected="selected"'; ?>>Augest</option>
<option value="September" <?php if ($row['month'] == 'September') echo ' selected="selected"'; ?>>september</option>
<option value="October" <?php if ($row['month'] == 'October') echo ' selected="selected"'; ?>>October</option>
<option value="November" <?php if ($row['month'] == 'November') echo ' selected="selected"'; ?>>November</option>
<option value="December" <?php if ($row['month'] == 'December') echo ' selected="selected"'; ?>>December</option>
</select>
<select name="year" style="height:30px;width:70px">
<option value="1991" <?php if ($row['year'] == '1991') echo 'selected'; ?>>1991</option>
<option value="1992" <?php if ($row['year'] == '1992') echo 'selected'; ?>>1992</option>
<option value="1993" <?php if ($row['year'] == '1993') echo 'selected'; ?>>1993</option>
<option value="1994" <?php if ($row['year'] == '1994') echo 'selected'; ?>>1994</option>
<option value="1995" <?php if ($row['year'] == '1995') echo 'selected'; ?>>1995</option>
<option value="1996" <?php if ($row['year'] == '1996') echo 'selected'; ?>>1996</option>
<option value="1997" <?php if ($row['year'] == '1997') echo 'selected'; ?>>1997</option>
<option value="1998" <?php if ($row['year'] == '1998') echo 'selected'; ?>>1998</option>
<option value="1999" <?php if ($row['year'] == '1999') echo 'selected'; ?>>1999</option>
<option value="2000" <?php if ($row['year'] == '2000') echo 'selected'; ?>>2000</option>
<option value="2001" <?php if ($row['year'] == '2001') echo 'selected'; ?>>2001</option>
<option value="2002" <?php if ($row['year'] == '2002') echo 'selected'; ?>>2002</option>
</select>
</td>
</tr>
<tr>
<td class="td">Address:</td>
<td><textarea rows="3" cols="27" name="address"><?php echo $row['address']; ?></textarea></td>
</tr>
<tr>
<td class="td">City:</td>
<td>
<select name="city" style="height:30px;width:100px">
<option value="Sagar" <?php if ($row['city'] == 'Sagar') echo 'selected'; ?>>Sagar</option>
<option value="Damoh" <?php if ($row['city'] == 'Damoh') echo 'selected'; ?>>Damoh</option>
<option value="Indore" <?php if ($row['city'] == 'Indore') echo 'selected'; ?>>Indore</option>
<option value="Bhopal" <?php if ($row['city'] == 'Bhopal') echo 'selected'; ?>>Bhopal</option>
<option value="Jhansi" <?php if ($row['city'] == 'Jhansi') echo 'selected'; ?>>Jhansi</option>
</select>

</td>
</tr>
<tr>
<td class="td">State:</td>
<td>
<select name="state" style="height:30px;width:150px">
<option value="Madhya Pradesh" <?php if ($row['state'] == 'Madhya Pradesh') echo 'selected'; ?>>Madhya Pradesh</option>
<option value="Uttar Pradesh" <?php if ($row['state'] == 'Uttar Pradesh') echo 'selected'; ?>>Uttar Pradesh</option>
</select>
</td>
</tr>
<tr>
<td class="td">Gender:</td>
<td><input type="text" name="gender"  class="box" value="<?php echo $row['gender']; ?>" ></td>
</tr>
<tr>
<td class="td">Interested Branch:</td>
<td>
<select name="branch" style="height:30px;width:100px">
<option value="IT" <?php if ($row['branch'] == 'IT') echo 'selected'; ?>>IT</option>
<option value="Electrical" <?php if ($row['branch'] == 'Electrical') echo 'selected'; ?>>Electrical</option>
<option value="Mechanical" <?php if ($row['branch'] == 'Mechanical') echo 'selected'; ?>>Mechanical</option>
</select>
</td>
</tr>
<tr>
<td class="td">Password</td>
<td><input type="text" name="password"  class="box" value="<?php echo $row['password']; ?>" ></td>
</tr>
<tr>
<td><a href="uploads/<?php echo $row['resume'] ?>" class="td" style="text-decoration:none">view resume</a>
</td>
<td></td>
</tr>
<tr colspan="2"><td>
</br></br><input type="submit" name="submit" value="Update" style="height:30px;width:100px;font-size:20px"></td>
</table>
</form>
</td>
</tr>

</body>
</html>