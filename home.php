<?php
if(!isset($_COOKIE['status'])){
    header('location: login.html');
}
?>
<html>
<head>
    <style>
    body
        {
            background-image : url('4.jpg');
            background-repeat : no-repeat;
            background-attachment: fixed;
            background-size : cover;
        }
    </style>
</head>


      
        <html>
        <body>

    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Home Page   <?php ?> <br><br>
    
    
    
    &nbsp;&nbsp;&nbsp;
    <a href="fpassword.php">Forget Password</a><br><br>
    &nbsp;&nbsp;&nbsp;
    <a href="changepass.php">Change Password</a><br><br>
    &nbsp;&nbsp;&nbsp;
    <a href="editprofile.php">Edit Profile</a><br><br>
    
 
    &nbsp;&nbsp;&nbsp;
    <a href="login.html">Logout</a><br><br>
    </body>
</html>
