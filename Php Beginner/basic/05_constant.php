<?php  
//syntax of constants


// define(name,value,case_insensitive);

// define("_NAME","aashiqui"); //not working in php8.0
// //never use $inside the define constant variable.

// echo _NAME;


define ("colors",["blue","green","yellow"]);
echo colors[2];
// define ("colors",["blue","green","yellow","orange"]);
// echo colors[2];

function mycolor(){
    echo  "<br>". colors[0];
}
mycolor();

?>