<?php
echo "Welcome to php tutorial on functions <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    // echo $i . "<br>";
    return $sum/$i;
}

$rohanDas = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($rohanDas);
$avgMarks = avgMarks($rohanDas);

$harry = [99, 98, 93, 94, 17, 100];
$sumMarksHarry = processMarks($harry);
$avgMarksHarry = avgMarks($harry);
echo "Total marks scored by Rohan Das out of 600 is $sumMarks <br>";
echo "Average marks scored by Rohan out of 600 is $avgMarks <br>";
echo "Total marks scored by Harry out of 600 is $sumMarksHarry <br>";
echo "Avergae marks scored by Harry out of 600 is $avgMarksHarry <br>";


// declare(strict_types=1);
function number(int $x,int $y){
    return $x+$y;//it will add the string and int and result 210 to avoid use 
}
echo number(10,20);
echo "<br>";

// declare(strict_types=1);
function number1(int $x,float $y):int{
    return $x+$y;//it will add the int and float  result 21 as int value 
}
echo number1(10,10.4);
echo "<br>";

// declare(strict_types=1);
function number2(int $x,float $y):float{
    return $x+$y;//it will add the int and float  result 21.4 as float value 
}
echo number2(10,10.4);
echo "<br>";



// declare(strict_types=1);
$a = '1';
$b = '2';
function FunctionName(int $a, int $b)
{
    return $a + $b;
}
echo FunctionName($a, $b);
?>
