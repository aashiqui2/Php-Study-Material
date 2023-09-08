<?php
// What is a session?
//they rae used to store the information
// Used to manage information across difference pages

// Verify the user login info
session_start();
$_SESSION['username'] = "aashiqui";
$_SESSION['password'] = "1234";
$_SESSION['email']="ashikmail2747@gmail.com";
echo "We have saved your session";


?>
