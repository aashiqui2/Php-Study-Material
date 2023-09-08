<?php 
//REQUEST 
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

//SERVER
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<br>";
echo $_SERVER['PHP_SELF'];//TO KNOW THE LOCATION OF THE FILE
// echo $_SERVER['php_self'];//error
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";

//SESSION
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//COOKIE
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";





?>