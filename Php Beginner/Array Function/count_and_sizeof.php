<?php  
$food=['orange','banana','apple','banana'];
// echo count($food);
// echo "<br>";
// echo sizeof($food);
// echo "<br>";

// $food=[
//     'fruits'=>['orange','banana','apple'],
//     'veg'=>['tomato','carrot','beans'],
//     'juice'=>['lemon','mango']
// ];
//syntax

// Parameter	Description
// array	Required. Specifies the array
// mode	Optional. Specifies the mode. Possible values:
// 0 - Default. Does not count all elements of multidimensional arrays
// 1 - Counts the array recursively (counts all the elements of multidimensional arrays)
// count(array, mode)
echo count($food,1);//8
echo "<br>";
// echo count($food['fruits'],1);
echo "<br>";
echo count($food, COUNT_RECURSIVE);
echo "<br>";
echo sizeof($food);
echo "<br>";


$len=count($food);
for($i=0;$i<$len;$i++){
    echo $food[$i]."<br>";
}

echo "<pre>"; 
print_r(array_count_values($food));
echo "</pre>"; 





?>