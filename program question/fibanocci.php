<?php
$n1 = 0;
$n2 = 1;
echo "THE FIBANOCCI SERIES IS ";
echo nl2br("\n");
echo nl2br("\n");
echo $n1 . ' ' . $n2.' ';

$num = 10;
for ($i = 2; $i < $num; $i++) {
    $n3 = $n1 + $n2;
    echo $n3 . ' ';
    $n1 = $n2;
    $n2 = $n3;
    $date=Date('o');
} 
echo "$date"; 

?>