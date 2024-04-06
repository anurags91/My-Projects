
<?php
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
        <form action="#" method="POST">
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
            <input type="gmail"class="input" name="gmail"><br>
        </div>
        <div class="input_field">    
            <label for="text">Password</label>
            <input type="text"class="input" name="password"><br>
        </div>
        <div class="input_field">    
            <label for="text">Confirm Password</label>
            <input type="text"class="input"name="cpassword"><br>
        </div>
        <div class="input_field">
            <input type="button" value="Register" class="btn">
        </div>
    </div>
    </form>
    </div>
    </body>
</html>
<?php

?>