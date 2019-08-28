<?php
session_start();
require("conn.php");
$name = $_POST['student_name'];
$fname = $_POST['fathers_name'];
$num = $_POST['number'];
$sec = $_POST['sec'];
$year = $_POST['year'];
$username = $_SESSION['noker'];
echo $name . " ".$fname . " ".$num . " ".$sec . " ".$year;
$sql = "INSERT INTO `$username`(`name`, `fname`, `mobile`, `section`, `year`) VALUES ('$name','$fname','$num','$sec','$year')";
$ins = mysqli_query($con,$sql);
if($ins)
{
    header("Refresh: 5; url=home.php");
}
else
{
    echo "Your Data Was Not Inserted";
}
?>