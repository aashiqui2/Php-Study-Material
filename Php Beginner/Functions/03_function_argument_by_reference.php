<?php  

function wow1($a){
    $a="hey";
}

$str="hello";
wow1($str);
echo $str." -->passing argument by value";

echo "<br>";
function wow(&$str){
    $str="hey";
}
$str="hello";
wow($str);
echo $str." -->passing argument by reference";

function first($num){
    $num+=5;
}
function second(&$num){
    $num+=7;
    
}
$number=10;
first($number);
echo "original value of $number <br>";
second($number);
echo "original value of $number <br>";
?>