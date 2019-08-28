<?php
	session_start();
	require('conn.php');
	$users = $_SESSION['noker'];
	echo "You are not login".$users;
	$search = $_POST['search'];
	foreach ($_POST['chk'] as $check) {
	$sql = "SELECT `mobile` FROM `$users` WHERE `id` = '$check'";
	$run = mysqli_query($con,$sql);
	$code = mysqli_fetch_assoc($run);
	$nemo = $code['mobile'];
	echo '91'.$nemo;
	$row = mysqli_num_rows($run); 
	printf("The Message is send to only  %d",$row);
	// Authorisation details.
	$username = "m.deepak1824@gmail.com";
	$hash = "4a1918f92f217583d2fa315aa56f95f98cfa569401fbb6e9293586fbf44192d9";
	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = '91'.$nemo; // A single number or a comma-seperated list of numbers
	$message = "Your Ward is Apsent Today... Regards Team Accurate";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo $result;
	}
?>