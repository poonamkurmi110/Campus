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


<div style="height:8%;width:100%;background-color:#2B547E;padding-top:100px;padding-left:500px;font-size:30px;color:white">Welcome <?php echo $_SESSION['fullname']; ?></div>
<form method="POST" action="updatejob.php">
<table style="height:92%;width:100%">
<tr>
<td style="width:20%;background-color:C8CABD">
<font size="5"><center>
<a href="welcomejob.php" style="text-decoration:none">View/Update Profile</a></br></br>
<a href="viewcompany.php" style="text-decoration:none">View Company Detail</a></br></br>
<a href="Logout.php" style="text-decoration:none">LogOut</a></br></br>
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
<td><input type="text" name="fullname" class="box" value="<?php echo $_SESSION['fullname']; ?>" ></td>
</tr>
<tr>
<td class="td">Father's Name:</td>
<td><input type="text" name="fathername" class="box" value="<?php echo $_SESSION['fathername']; ?>" ></td>
</tr>
<tr>
<td class="td">Mother's Name:</td>
<td><input type="text" name="mothername" class="box" value="<?php echo $_SESSION['mothername']; ?>" ></td>
</tr>
<tr>
<tr><td class="td">Contact No.:</td>
<td><input type="text" name="contactno" class="box" value="<?php echo $_SESSION['contactno']; ?>" ></td>
</tr>
<tr>
<tr><td class="td">Contact No.:</td>
<td><input type="text" name="email" class="box" value="<?php echo $_SESSION['email']; ?>" readonly="readonly"></td>
</tr>
<tr>
<td class="td">Date of Birth:</td>
<td><select name="day" style="height:30px;width:70px">
<option value="1" <?php if ($_SESSION['day'] == '1') echo 'selected'; ?>>1</option>
<option value="2" <?php if ($_SESSION['day'] == '2') echo ' selected="selected"'; ?>>2</option>
<option value="3" <?php if ($_SESSION['day'] == '3') echo ' selected="selected"'; ?>>3</option>
<option value="4" <?php if ($_SESSION['day'] == '4') echo ' selected="selected"'; ?>>4</option>
<option value="5" <?php if ($_SESSION['day'] == '5') echo ' selected="selected"'; ?>>5</option>
<option value="6" <?php if ($_SESSION['day'] == '6') echo ' selected="selected"'; ?>>6</option>
<option value="7" <?php if ($_SESSION['day'] == '7') echo ' selected="selected"'; ?>>7</option>
<option value="8" <?php if ($_SESSION['day'] == '8') echo ' selected="selected"'; ?>>8</option>
<option value="9" <?php if ($_SESSION['day'] == '9') echo ' selected="selected"'; ?>>9</option>
<option value="9" <?php if ($_SESSION['day'] == '10') echo ' selected="selected"'; ?>>10</option>
<option value="9" <?php if ($_SESSION['day'] == '11') echo ' selected="selected"'; ?>>11</option>
<option value="9" <?php if ($_SESSION['day'] == '12') echo ' selected="selected"'; ?>>12</option>
</select>
<select name="month" style="height:30px;width:100px">
<option value="January" <?php if ($_SESSION['month'] == 'January') echo 'selected'; ?>>January</option>
<option value="February" <?php if ($_SESSION['month'] == 'February') echo ' selected="selected"'; ?>>February</option>
<option value="March" <?php if ($_SESSION['month'] == 'March') echo ' selected="selected"'; ?>>March</option>
<option value="April" <?php if ($_SESSION['month'] == 'April') echo ' selected="selected"'; ?>>April</option>
<option value="May" <?php if ($_SESSION['month'] == 'May') echo ' selected="selected"'; ?>>May</option>
<option value="June" <?php if ($_SESSION['month'] == 'June') echo ' selected="selected"'; ?>>June</option>
<option value="July" <?php if ($_SESSION['month'] == 'July') echo ' selected="selected"'; ?>>July</option>
<option value="Augest" <?php if ($_SESSION['month'] == 'Augest') echo ' selected="selected"'; ?>>Augest</option>
<option value="September" <?php if ($_SESSION['month'] == 'September') echo ' selected="selected"'; ?>>september</option>
<option value="October" <?php if ($_SESSION['month'] == 'October') echo ' selected="selected"'; ?>>October</option>
<option value="November" <?php if ($_SESSION['month'] == 'November') echo ' selected="selected"'; ?>>November</option>
<option value="December" <?php if ($_SESSION['month'] == 'December') echo ' selected="selected"'; ?>>December</option>
</select>
<select name="year" style="height:30px;width:70px">
<option value="1991" <?php if ($_SESSION['year'] == '1991') echo 'selected'; ?>>1991</option>
<option value="1992" <?php if ($_SESSION['year'] == '1992') echo 'selected'; ?>>1992</option>
<option value="1993" <?php if ($_SESSION['year'] == '1993') echo 'selected'; ?>>1993</option>
<option value="1994" <?php if ($_SESSION['year'] == '1994') echo 'selected'; ?>>1994</option>
<option value="1995" <?php if ($_SESSION['year'] == '1995') echo 'selected'; ?>>1995</option>
<option value="1996" <?php if ($_SESSION['year'] == '1996') echo 'selected'; ?>>1996</option>
<option value="1997" <?php if ($_SESSION['year'] == '1997') echo 'selected'; ?>>1997</option>
<option value="1998" <?php if ($_SESSION['year'] == '1998') echo 'selected'; ?>>1998</option>
<option value="1999" <?php if ($_SESSION['year'] == '1999') echo 'selected'; ?>>1999</option>
<option value="2000" <?php if ($_SESSION['year'] == '2000') echo 'selected'; ?>>2000</option>
<option value="2001" <?php if ($_SESSION['year'] == '2001') echo 'selected'; ?>>2001</option>
<option value="2002" <?php if ($_SESSION['year'] == '2002') echo 'selected'; ?>>2002</option>
</select>
</td>
</tr>
<tr>
<td class="td">Address:</td>
<td><textarea rows="3" cols="27" name="address"><?php echo $_SESSION['address']; ?></textarea></td>
</tr>
<tr>
<td class="td">City:</td>
<td>
<select name="city" style="height:30px;width:100px">
<option value="Sagar" <?php if ($_SESSION['city'] == 'Sagar') echo 'selected'; ?>>Sagar</option>
<option value="Damoh" <?php if ($_SESSION['city'] == 'Damoh') echo 'selected'; ?>>Damoh</option>
<option value="Indore" <?php if ($_SESSION['city'] == 'Indore') echo 'selected'; ?>>Indore</option>
<option value="Bhopal" <?php if ($_SESSION['city'] == 'Bhopal') echo 'selected'; ?>>Bhopal</option>
<option value="Jhansi" <?php if ($_SESSION['city'] == 'Jhansi') echo 'selected'; ?>>Jhansi</option>
</select>

</td>
</tr>
<tr>
<td class="td">State:</td>
<td>
<select name="state" style="height:30px;width:150px">
<option value="Madhya Pradesh" <?php if ($_SESSION['state'] == 'Madhya Pradesh') echo 'selected'; ?>>Madhya Pradesh</option>
<option value="Uttar Pradesh" <?php if ($_SESSION['state'] == 'Uttar Pradesh') echo 'selected'; ?>>Uttar Pradesh</option>
</select>
</td>
</tr>
<tr>
<td class="td">Gender:</td>
<td><input type="text" name="gender"  class="box" value="<?php echo $_SESSION['gender']; ?>" ></td>
</tr>
<tr>
<td class="td">Interested Branch:</td>
<td>
<select name="branch" style="height:30px;width:100px">
<option value="IT" <?php if ($_SESSION['branch'] == 'IT') echo 'selected'; ?>>IT</option>
<option value="Electrical" <?php if ($_SESSION['branch'] == 'Electrical') echo 'selected'; ?>>Electrical</option>
<option value="Mechanical" <?php if ($_SESSION['branch'] == 'Mechanical') echo 'selected'; ?>>Mechanical</option>
</select>
</td>
</tr>
<tr>
<td class="td">Password</td>
<td><input type="text" name="password"  class="box" value="<?php echo $_SESSION['password']; ?>" ></td>
</tr>
<tr colspan="2"><td>
</br></br><input type="submit" name="submit" value="Update" style="height:30px;width:100px;font-size:20px"></td>
</table>
</form>
</td>
</tr>

</body>
</html>