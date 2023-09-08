
 
 <?php 
//  function font($font,$size=1.5)
//  {
//     echo "<p style=\"font-family: $font;font-size:{$size}em;\">Hello</p>";
//  }
 
//  font("Courier");
//  font("Courier",5);
// function sum($a,$b)
// {
//    $c=$a+$b;
//    return $c;
// }

// echo sum(2,5);
// function display($greeting,$size)
// {
// echo "<p style=\"font-family:$greeting;font-size:{$size}px\"> hello</p>";
// }
// display("Arial",583);
function averge($array)
{
   $total=0;
   foreach($array as $value)
   {
      $total+=$value;
   }
   echo $total/count($array);
}
$score=array(25,56,45,35,78);
averge($score);
 ?>
