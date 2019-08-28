<?php
require("conn.php");    
session_start();
$e_mmail = $_POST['deepak_m'];
$passwordd = $_POST['pass_word'];
$main = md5($passwordd);
$_SESSION['noker'] = $e_mmail;


$sql = "SELECT * FROM `coordinate` WHERE `email` = '$e_mmail' AND `password` = '$main'";
$run = mysqli_query($con,$sql);
if($run)
{
    echo "It is run";
}
else
{
    echo "It is not run";
}
$row = mysqli_num_rows($run);
printf("here is the no %d",$row);
if($row == 1)
{
    header("Location:home.php");   
}
else
{
    echo "you are not login";
}
?>