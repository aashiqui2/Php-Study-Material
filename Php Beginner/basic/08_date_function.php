<?php
echo "Welcome to the world of dates<br>";
// $d = date("dS F Y");
$d = date("dS F Y, g:i A");
echo "Todays date is $d <br>";
// Quick Quiz - Post at least 3 examples of dates in php in the comments below

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');
 
$year = date("Y");
echo "<br>";
echo "Copyright $year | All rights reserved <br>";


echo date("y/m/d");
echo "<br>";
echo date("y-m-d");
echo "<br>";
echo date("y.m.d");
echo "<br>";
echo date("l");//to print the day-->l
//to print the last two digit of year -->y
//to print the whole year -->Y


//time
echo  "<br>";
echo date("h:i:sa");

?>
<!-- <p>Copyright 2010-2023</p> -->
<p>Copyright 2010- <?php echo date("Y")?></p>


