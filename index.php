<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Project Portal System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

    <h1>Project Portal System</h1>
    <a href="#" class="guest" >Guest Login</a> |&nbsp;
    <a href="#"> Forget password</a>
    <form action="studentHome.php" method="post">
    <div class="container">
        <h2>Login Form</h2>
        <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" class="button">Login</button>
    <input type="button"  class="button" onclick="location.href='studentRegistration.php';"value="Student Register">
    <input type="button"  class="button" onclick="location.href='facultyRegistration.php';"value="Faculty Register">
  </div>
</form>

</body>
</html>

