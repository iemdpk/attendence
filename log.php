<?php 
session_start();
echo "You are log Out";
header("location:index.html");
session_destroy();
?>