
<?php
error_reporting(0);
include("connection.php")
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST" autocomplete="off">
        <div class="title">
            Resistration Form
        </div>
        <div class="form">
            <div class="input_field">
            <label for="text">Username</label>
             <!-- here name is to send data to the database -->
            <input type="text"class="input" name="uname"><br>
        </div>
        <div class="input_field">
            <label for="text">Gmail</label>
             <!-- name is not related with the your label name -->
            <input type="email"class="input" name="gmail"><br>
        </div>
        <div class="input_field">    
            <label for="text">Password</label>
            <input type="password"class="input" name="password"><br>
        </div>
        <div class="input_field">    
            <label for="text">Confirm Password</label>
            <input type="password"class="input"name="cpassword"><br>
        </div>
        <div class="input_field">
            <input type="submit" value="Register" class="btn" name="register">
        </div>
    </div>
    </form>
    </div>
    </body>
</html>
<?php
if($_POST['register'])
{
    // here $user_name,$gmail,password,con_password are the variable used to
    //  store the value current variable and no relation with any other variable name
    $username=     $_POST['uname'];
    $gmail  =       $_POST['gmail'];
    $password =     $_POST['password'];
    $conpassword=  $_POST['cpassword'];

    $query = "INSERT INTO FORMDATA(username,gmail,password,confirm_password) VALUES ('$username','$gmail','$password','$conpassword')";
    $data = mysqli_query($conn,$query);
    if($data)
    {
        header('location:display.php');
    }
    else{
        echo"failed";
    }
}
?>