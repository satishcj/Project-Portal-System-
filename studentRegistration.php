<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="studentRegister.css"/>
        <title>Register</title>
        <script src="studentRegister.js"></script>
    </head>
    <body onload="document.register.stuname.focus();">
        <form  method="post" name="register" onsubmit="return validation();">
    
        <div class="container">
        <h2>Register</h2>
        <label><b>Student Name</b></label>
        <input type="text" placeholder="Enter Student Name" name="suname" >

        <label><b>Branch</b></label>
        <input type="text" placeholder="Enter Student Branch" name="branch" required>
                
        <label><b>Registration Number</b></label>
        <input type="text" placeholder="Enter Registration number" name="regno" required>
        
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email Address" name="email" required>
        
        <label><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone Number" name="phone" required>
        
        <label><b>Address</b></label>
        <textarea rows="4"cols="48" name="address"  required></textarea>
        
        <label><b>Date of Birth</b></label>
        <input type="date" name="date" required>
        
        <label><b>Gender</b></label><br>
        <table width="100%">
            <tr>
                <td><input type="radio" name="gender" value="Male"  checked>Male</td>
                <td><input type="radio" name="gender" value="Female" >Female</td>
            </tr>
        </table>
        
        <label style="white-space: pre-wrap;"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
                
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        
        <label><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password" name="conpsw" required>
                
        <button type="submit" class="button">Register</button>

        </div>
    </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
