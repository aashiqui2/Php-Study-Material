<?php  
                                                                                           
function  Hello($fname="First",$lname="Last"){
    echo "hello $fname $lname.<br>";
    $v="$fname $lname";
    return $v;


}
Hello();
echo"<br>";

$name= hello("yahoo",".com");
echo $name;

function sum($a,$b,$c){
    $s=$a+$b+$c;
    return $s;
}

$total=sum(70,02,45);
echo "<br>".$total;//117

function percentage($total){
    $per=$total/3;
    return $per;
    
} 
$l=percentage($total);
echo "<br>".$l;

?>