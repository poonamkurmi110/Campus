<?php
session_start();
if (isset($_SESSION['email'])) {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $conn = mysqli_connect($host, $user, $pass, "campusdb");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $email = $_SESSION['email'];
    $result = mysqli_query($conn, "select * from tblcomreg where email='$email' ");
    $row = mysqli_fetch_array($result);
} else {
    header('location:companylogin.php');
}
?>
<html>

<head>
    <title>Welcome Page</title>
    <style>
        .td {
            color: #2B547E;
            font-size: 24px;
            font-weight: bold;
        }

        .box {
            height: 30px;
            width: 250px;
        }
    </style>
</head>

<body style="margin:0px;padding:0px">


    <div style="height:8%;width:100%;background-color:#2B547E;padding-top:100px;padding-left:500px;font-size:30px;color:white">Welcome <?php echo $row['companyname']; ?></div>
    <form method="POST" action="updatecom.php">
        <table style="height:92%;width:100%">
            <tr>
                <td style="width:20%;background-color:C8CABD">
                    <font size="5">
                        <center>
                            <a href="viewjobseeker.php" style="text-decoration:none">View Jobseeker Detail</a></br></br>
                            <a href="logoutadmin.php" style="text-decoration:none">LogOut</a></br></br>
                        </center>
                    </font>
                </td>
                <td>
                    <table align="center">
                        <tr>
                            <td style="color:#2B547E;font-size:30px;font-weight:bold;">View/Update Profile</br></br></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="td">Company Name:</td>
                            <td><input type="text" name="companyname" class="box" value="<?php echo $row['companyname']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="td">Email:</td>
                            <td><input type="text" name="email" class="box" value="<?php echo $row['email']; ?>" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td">Password:</td>
                            <td><input type="password" name="password" class="box" value="<?php echo $row['password']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="td">Mobile No.:</td>
                            <td><input type="text" name="mobileno" class="box" value="<?php echo $row['mobileno']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="td">Address:</td>
                            <td><textarea rows="3" cols="27" name="address"><?php echo $row['address']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td class="td">City:</td>
                            <td><input type="text" name="city" class="box" value="<?php echo $row['city']; ?>"></td>
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
                            <td class="td">No. of Post:</td>
                            <td><input type="text" name="postno" class="box" value="<?php echo $row['postno']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="td">Designation:</td>
                            <td><input type="text" name="designation" class="box" value="<?php echo $row['designation']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="td">Salary:</td>
                            <td><input type="text" name="salary" class="box" value="<?php echo $row['salary']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="td">Website:</td>
                            <td><input type="text" name="website" class="box" value="<?php echo $row['website']; ?>"></td>
                        </tr>
                        <tr colspan="2">
                            <td>
                                </br></br><input type="submit" name="submit" value="Update" style="height:30px;width:100px;font-size:20px"></td>
                    </table>
    </form>
    </td>
    </tr>

</body>

</html>