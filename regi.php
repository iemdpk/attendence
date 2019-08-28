<?php
require("conn.php");

$name = $_POST['full_name'];
$email = $_POST['email'];
$year = $_POST['year'];
$section = $_POST['section'];
$mobile = $_POST['mobile'];
$unique  = "Implayer";
$pass = $_POST['password'];
$secure = md5($pass);

$sql = "INSERT INTO `coordinate`(`fname`, `email`, `year`, `section`, `mobile`, `password`) VALUES ('$name','$email','$year','$section','$mobile','$secure')";

$query = mysqli_query($con,$sql);
if($query)
{
	echo "Your data was   inserted";
}
else
{
	echo "your data was not inserted";
}
$sql1 = "CREATE TABLE `attendence`.`$email` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `fname` VARCHAR(30) NOT NULL , `mobile` VARCHAR(15) NOT NULL , `section` VARCHAR(10) NOT NULL , `year` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
$table1 = mysqli_query($con,$sql1);
if($table1)
{
	echo "table created ";
}
else
{
	echo "table was not created ";
}
?>