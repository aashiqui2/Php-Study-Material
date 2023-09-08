<?php 
$value=4;
echo"$value<br>";
reference($value);
function reference(&$number)
{
$number*=$number;
}
echo $value;


 ?>