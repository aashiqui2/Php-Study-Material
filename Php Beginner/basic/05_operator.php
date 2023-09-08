<?php
/* Operators in PHP
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators 
4. Logical Operators
*/

$a = 45;
$b = 8;

// 1. Arithmetic Operators
echo "For a + b, the result is ". ($a + $b) . "<br>";
echo "For a - b, the result is ". ($a - $b) . "<br>";
echo "For a * b, the result is ". ($a * $b) . "<br>";
echo "For a / b, the result is ". ($a / $b) . "<br>";
echo "For a % b, the result is ". ($a % $b) . "<br>";
echo "For a ** b, the result is ". ($a ** $b) . "<br>";
 
// 2. Assignment Operators
// $x = $a;
// echo "For x, the value is ". $x . "<br>";

// $a += 6;
// echo "For a, the value is ". $a . "<br>";

// $a -= 6;
// echo "For a, the value is ". $a . "<br>";

// $a *= 6;
// echo "For a, the value is ". $a . "<br>";

// $a /= 5;
// echo "For a, the value is ". $a . "<br>";

// $a %= 5; // $a = $a % 5
// echo "For a, the value is ". $a . "<br>";


// 3. Comparison Operators 
$x = 78;
$y = 78;

// echo "For x > y, the result is ";
// echo var_dump($x > $y);

// echo "For x > y, the result is ";
// echo var_dump($x >= $y);

// echo "For x < y, the result is ";
// echo var_dump($x < $y);

// echo "For x < y, the result is ";
// echo var_dump($x <= $y);

echo "For x <> y, the result is "; 
echo var_dump($x <> $y);///not equal <>
echo "<br>";
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y


// 4. Logical Operators

$m = true;
$n = true;

echo "For m and n, the result is "; 
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is "; 
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is "; 
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is "; 
echo var_dump($m || $n);
echo "<br>";


$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}



echo "For !m , the result is "; 
echo var_dump(!$m);
echo "<br>";

//append
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;

//concatination
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;



//array operator

$colors1=array("blue"=>"2","green"=>"5");
$colors2=array("red"=>"4","orange"=>"3");
print_r($colors1+$colors2);

//conditional operator

// ?:

$x=0;
echo $x?"true":"false";

?>
