
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <title>Login By Anurag</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
       <form action="#" method="POST" autocomplete="off">
    <div class="form">
        <input type="text" class="textfield" placeholder="Username" name="username" required>
        <input type="password" class="textfield" placeholder="Password" name="password" required>
        <div class="forgetpass"><a href="#" class="link" onclick="message()">Forget Password?</a>
    </div>
        <input type="submit" value="Login" class="btn" name="login" >
        <div class="signup"> New Member? <a href="index.php" class="link">SignUp Here</a>

        </div>
    </div>
    </div>
    </form>
    <script>
        function message()
        {
            alert("Please Sign Up ");
        }
    </script>
    
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $query="SELECT * FROM formdata WHERE gmail ='$username'&& password='$pwd'";
    $result= mysqli_query($conn, $query);
    $total = mysqli_num_rows($result);
   //echo $total;
   if($total >= 1)
   {
    
    header('location:display.php');
   }
   else{
    echo "<script>alert('NO USER LOGIN')</script>"; 
   }
}

?>

