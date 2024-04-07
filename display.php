<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background-color: aqua;
            }
           table {
               background-color:white;
            }
            .delete
            {
                background-color:red;
                color:white;
                border:0;
                outline:none;
                border-radius:3px;
                cursor:pointer;
                align:center;
                height:30px;
                width:100px;
               

            }
        </style>
    </head>
    </html>

<?php
error_reporting(0);
include("connection.php");
$query = "SELECT * FROM FORMDATA ";
$data = mysqli_query($conn,$query);


$total = mysqli_num_rows($data); // this function counts the number of record rows

//this funtion load the data from the data base in the array form
// echo $total;

if($total != 0)
{
    ?>
    <h2 align="center">Admin DashBoard All Records</h2>
     <center><table border="1" cellspacing="7" width="80%">
        <tr>
        <th width ="20%">Username</th>
        <th width ="20%">Gmail</th>
        <th width ="15%">Password</th>
        <th width ="15%">Confirm Password</th>
        <th width ="10%">Operation</th>
</tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
      echo"  <tr>
        <td>".$result['username']."</td>
        <td>".$result['gmail']."</td>
        <td>".$result['password']."</td>
        <td>".$result['confirm_password']."</td>
        <td><a href='#'><input type='submit' value='Delete' class='delete'></a></td>
    </tr> 
    ";
        // echo"Table has a Record";
 

    } 
}
else{
    echo"No Record Found";
    }
?>
</table>
</center>
<!-- echo $result['username']." " 
        .$result['gmail']." ".$result['password']." ".$result['con_password']; -->