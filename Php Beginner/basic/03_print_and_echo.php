<?php  
echo "aashiqui<br>";
echo 'aashiqui<br>';
echo "aashiqui","bhai";
echo "<br>";
echo "aashiqui"."bhai";
//difference between echo and print
//we can pass multiple argument values in echo 
// print "aashiqui","bhai";///error
// we cannot separate using the comma (,) in print but we can concatinate

$print_return_value = print "Hello Word!";

$print_return_value;
$string_var = "Hello world!";
//var_dump-->var_dump function displays the variable value along with its data type.
echo var_dump($string_var). "<br>";

$integer_var = 10;
echo var_dump($integer_var) . "<br>";

$floating_var = 11.5;
echo var_dump($floating_var) . "<br>";
$array_var = array(10, "Hello world!", 11.5, array("one", "two", "three"));

echo var_dump($array_var) . "<br>";

$count = 10;

$fruit = "Apple";
//printf-->Using printf function you can display output with the help of format specifiers.
printf("I have %u %s.", $count, $fruit);
?>