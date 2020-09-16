<html>
<head>
<title>Company Login</title>
<style>
.txtbox
{
height:35px;
width:350px;
background:transparent;
font-size:20px;
color:white;
border:1px solid #003366;
}

</style>
</head>
<body style="margin:0px;padding:0px" >
<?php
include("headercompany.php3");
?>
<div style="height:90%;width:100%;background-image:url('img/company3.jpeg');background-size:cover;padding-top:100px"">
<form method="POST" action="connectcomlogin.php3">
<table bgcolor="#848482" width="35%"  height="70%"; align="center" style="padding-left:70px;padding-top:20px;padding-bottom:20px">
<tr>
<td STYLE="font-size:40px;color:white"><b>Login</br></b></td>
</tr>
<tr>
<td style="font-size:20px;font-weight:bold;color:#003366"></br>Email</td>
</tr>
<tr>
<td><input type="email" placeholder="Email" class="txtbox" name="email" id="email" required></td>
</tr>
<tr>
<td style="font-size:20px;font-weight:bold;color:#003366"></br>Password</td>
</tr>
<tr>
<td><input type="password" placeholder="password" class="txtbox" name="password" id="password" required></td>
</tr>
<tr>
<td></br><input type="submit" style="height:35px;width:110px;text-align:center;background-color:#c36241;color:white;font-size:20;font-weight:bold" value="Login">
<p style="padding-left:50"><a href="passwordrecovery" style="text-decoration:none;color:blue"></a></p>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>