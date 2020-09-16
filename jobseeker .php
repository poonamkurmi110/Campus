

<html>
<head>
<title>Jobseeker Login</title>
<style>
.tb{
height:70%;
width:70%;
}
.txtbox{
background:transparent;

border:0px;
border-bottom:1px solid #1F45FC;
outline:none;
width:350px;
height:40px;
font-weight:bold;
font-size:20px;
color:gray;
}
a:link{
color:blue;
}
a:visited{
color:#00008b;
}
a:hover{
color:white;
}
a:active{
color:#008080;
}
</style>
</head>
<body style="margin:0px;padding:0px" >
<div style="height:8%;text-align:right;background-color:C8CABD;border-color:#080808">
<table align="right" height="100%" width="30%" cellspacing="8">
<tr style="text-align:bottom"><td >
<h2><a href="studentlogin.php3" style="text-decoration:none;" >Login</a></h2></td>
<td><h2>
<a href="studentregistration.php"style="text-decoration:none;">Registration</a></h2></td></tr></table>
</div>
<div style="height:92%;width:100%;background-color:#2B547E;padding-left:4px;padding-top:80px">
<table class="tb" align="center">
<tr cellspacing="20px"><td  style="height:100%;width:50%"><img src="img/login2.jpg" style="height:100%;width:100%"></td>
<td style="padding:50px" bgcolor="white">
<h1><b><font color="#1F45FC">Login</font><font color="gray"> / Sign up</font></b></h1></br></br>
<form method="POST" action="connectjoblogin.php3">
<input type="email" class="txtbox" placeholder="Email" name="email" required></br></br>
<input type="password" class="txtbox" placeholder="Password" name="password" required></br></br></br>
<input type="submit" style="outline:none;text-align:center;color:#1F45FC;border-color:#1F45FC;background-color:white;height:40px;width:100px;border-radius:25px;font-weight:bold;font-size:20px" value="Login">

</form>
</td></tr>

</table>

</div>
</body>
</html>
