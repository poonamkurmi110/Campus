<html>

<head>
    <title>Admin Login</title>
    <style>
        .txtbox {
            background-color: bcc6cc;
            height: 50px;
            width: 350px;
            font-size: 20px;
            color: black;
            outline: none
        }
    </style>
</head>

<body style="margin:0px;padding:0px">
    <div style="height:100%;width:100%;background-image:url('img/admin2.jpg');background-size:cover;padding-top:170px;padding-left:470px">

        <div style="color:#15317e;font-size:42px;padding-left:20px;font-weight:bold;font-face:Arial;height:60%;width:30%;background-color:white;padding-top:10px">Admin Login panel</br>
            <form method="POST" action="checkadmin.php">
                <p>
                    <table cellspacing="15px">
                        <tr>
                            <td><input type="text" class="txtbox" placeholder="UserName" name="username" id="username" required></td>
                        </tr>
                        <tr>
                            <td><input type="password" class="txtbox" placeholder="Password" name="password" id="password" required></td>
                        </tr>
                        <tr>
                            <td><input type="submit" style="height:50px;width:350px;background-color:#15317e;color:white;font-size:25px;font-weight:bold" value="Let Me In"></td>
                        </tr>
                    </table>
                </p>
            </form>
        </div>
</body>

</html>