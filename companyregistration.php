<html>

<head>
  <title>Company Registration</title>
  <style>
    .txtbox {
      height: 35px;
      width: 300px;
      background: transparent;
      font-size: 15px;
      border: 1px solid black;
      font-weight: bold;
      color: black;
    }

    .td1 {
      font-size: 20px;
      font-weight: bolder;
      color: #000080;
    }

    ::placeholder {
      color: BLACK;

    }

    a:link {
      color: blue;
    }

    a:visited {
      color: #00008b;
    }

    a:hover {
      color: white;
    }

    a:active {
      color: #008080;
    }

    .lb {
      color: red;
    }
  </style>
</head>

<body style="margin:0px;padding:0px">
  <div style="height:8%;text-align:right;background-color:C8CABD;border-color:#080808">
    <table align="right" height="100%" width="30%;">
      <tr style="text-align:bottom">
        <td>
          <h2><a href="companylogin.php" style="text-decoration:none;">Login</a></h2>
        </td>
        <td>
          <h2>
            <a href="companyregistration.php" style="text-decoration:none;">Registration</a></h2>
        </td>
      </tr>
    </table>
  </div>
  <div style="width:100%;background-image:url('img/company12.jpg');background-size:cover">
    <div style="font-size:40px;font-weight:bold;padding-left:300px;padding-top:30px;color:#151b54">Register Your Company Now</br></br></div>
    <form method="POST" action="connectcomreg.php">
      <table align="center" cellpadding="15">
        <tr>
          <td class="td1">Company Name:</td>
          <td><input type="text" class="txtbox" placeholder="Company Name" name="companyname" id="companyname" required></br>

          </td>
        </tr>
        <tr>
          <td class="td1">Email:</td>
          <td><input type="email" class="txtbox" placeholder="Email" name="email" id="email" required></td>
        </tr>

        <tr>
          <td class="td1">Password:</td>
          <td><input type="password" class="txtbox" placeholder="Password" name="password" id="password" required></td>
        </tr>
        <tr>
          <td class="td1">Mobile No.</td>
          <td><input type="text" placeholder="Mobile No." class="txtbox" name="mobileno" maxlength="10" minlength="10" id="mobileno" required></br>
          </td>

        </tr>
        <tr>
          <td class="td1">Address:</td>
          <td><textarea rows="4" cols="35" placeholder="Address" name="address" id="address" style="background:transparent;font-weight:bold;font-size:15;border:1px solid black" required></textarea></td>
        </tr>
        <tr>
          <td class="td1">city:</td>
          <td><input type="text" Placeholder="City" class="txtbox" name="city" id="city" required></td>
        </tr>
        <tr>
          <td class="td1">State:</td>
          <td><select style="height:35px;width:200px;background:transparent;font-size:15px;color:black;font-weight:bold;border:1px solid black" name="state" id="state" required="true">
              <option value="none">------Select-------</option>
              <option value="MP">Madhya Pradesh</option>
              <option value="UP">Utter Pradesh</option>
            </select>
            </br>
          </td>
        </tr>
        <tr>
          <td class="td1" s>Branch:</td>
          <td><select style="height:35px;width:180px;background:transparent;font-size:15px;color:black;font-weight:bold;border:1px solid black" name="branch" id="branch" required="true">
              <option value="none">------select------</option>
              <option value="IT">IT</option>
              <option value="electric">Electric</option>
              <option value="mechanical">Mechanical</option>
            </select>
            </br>
          </td>
        </tr>
        <tr>
          <td class="td1">No. of Post:</td>
          <td><input type="text" class="txtbox" placeholder="No of Post" name="postno" id="post" required>
          </td>
        </tr>
        <tr>
          <td class="td1">Designation of Post:</td>
          <td><input type="text" class="txtbox" placeholder="Designation" name="designation" id="designation" required>
          </td>
        </tr>
        <tr>
          <td class="td1">Salary(Per Month):</td>
          <td><input type="text" class="txtbox" placeholder="Salary" name="salary" id="salary" required>
          </td>
        </tr>
        <tr>
          <td class="td1">Company Website:</td>
          <td><input type="text" class="txtbox" placeholder="Website" name="website" id="website" required>
            </br></td>
        </tr>
        <tr colspan="1">
          <td><input type="submit" name="submit" Value="Register Me" style="height:45px;width:200px;background-color:#2b3856;color:white;font-weight:bold;font-size:22px" onsubmit="valid()"></td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>