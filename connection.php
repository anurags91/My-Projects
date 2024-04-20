<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="loginform";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
   //echo"Connection Successful";
}
else{
    echo "Failed";

}
?>