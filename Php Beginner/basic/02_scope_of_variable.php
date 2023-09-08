<!-- PHP has three types of variable scopes:

1.  Local variable

2.  Global variable

3.  Static variable -->
<?php

// function test()
// {
//     $name = "Manu Manjunatha"; //This is local variable
//     echo $name;
// }

// test();
// $name = "Manu Manjunatha"; // This is global variable
// function test()
// {
//     global $name;
//     echo $name;//error can be accesssed
// }

// test();


// $first_name = "Manu";
// $last_name = "Manjunatha";
 
// function test()
// {

//   global  $first_name;
//     $first_name = "Advith";
//     echo $first_name;
//     echo "</br>";
//     echo $GLOBALS["first_name"];

//     echo "</br>----------------------</br>";

//     $last_name = "Tyagraj";
//     echo $last_name;
//     echo "</br>";
//     echo $GLOBALS["last_name"];
// }

// test();

// function test()
// {
//     static $static_num = 1;
//     $non_static_num = 1;
//     $static_num ++;
//     $non_static_num ++;
//     echo "Static: " . $static_num . "</br>";
//     echo "Non-static: " . $non_static_num . "</br>";

// }
// // first call
// test();
// // second call
// test();



?>