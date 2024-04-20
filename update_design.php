<?php
error_reporting(0);
include("connection.php");
$id =  $_GET['id'];
$query = "SELECT * FROM FORMDATA where id ='$id'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
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
            Update Details
        </div>
        <div class="form">
            <div class="input_field">
            <label for="text">Username</label>
             <!-- here name is to send data to the database -->
            <input type="text" value="<?php echo $result['username'];?>"class="input" name="uname"><br>
        </div>
        <div class="input_field">
            <label for="text">Gmail</label>
             <!-- name is not related with the your label name -->
            <input type="gmail"value="<?php echo $result['gmail'];?>"class="input" name="gmail"><br>
        </div>
        <div class="input_field">    
            <label for="text">Password</label>
            <input type="text"value="<?php echo $result['password'];?>"class="input" name="password"><br>
        </div>
        <div class="input_field">    
            <label for="text">Confirm Password</label>
            <input type="text"value="<?php echo $result['confirm_password'];?>"class="input"name="cpassword"><br>
        </div>
        <div class="input_field">
            <input type="submit" value="Update" class="btn" name="Update">
        </div>
    </div>
    </form>
    </div>
    </body>
</html>
<?php
if($_POST['Update'])
{
    // here $user_name,$gmail,password,con_password are the variable used to
    //  store the value current variable and no relation with any other variable name
    $username=     $_POST['uname'];
    $gmail  =       $_POST['gmail'];
    $password =     $_POST['password'];
    $conpassword=  $_POST['cpassword'];

    
    $query = "UPDATE formdata set username='$username',gmail='$gmail',password='$password',confirm_password='$conpassword' WHERE id ='$id'";
    $data = mysqli_query($conn,$query);
    if($data)
    {
        echo"<script>alert('Record Updated Successfully')</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/loginform/display.php" />

        <?php
    }
    else{
        echo"failed";
    }
}
 ?>