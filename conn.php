<?php 
$con = mysqli_connect('localhost','root','deepakmishra','attendence');
if(!$con)
{
	echo "You are Not Connected ";
}
else
{
	echo "You are Connected ";
}
?>