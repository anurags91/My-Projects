<?php
include("connection.php");
$id =  $_GET['id'];
$query = "DELETE from formdata where id = '$id'";
$data = mysqli_query($conn,$query);
if($data)
{
    echo"<script>alert('Record Deleted Successfully')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/loginform/display.php" />
    <?php
    
}
else{
    echo"<script>alert('Failed to delete')</script>";
}
?>