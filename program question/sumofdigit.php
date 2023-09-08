<?php
// function sum($a)
// {
//     $sum=0;
//     for($i=0;$i<strlen($a);$i++)
//     {
//         $sum+=$a[$i];
//     }
//     return $sum;
// }
// $a="111";
// echo sum($a);
$a = 111;  
$sum=0; $rem=0;  
  for ($i =0; $i<strlen($a);$i++)  
 {  
  $rem=$a%10;  
   $sum = $sum + $rem;  
   $a=$a/10;  
  }  
 echo $sum; 

?>