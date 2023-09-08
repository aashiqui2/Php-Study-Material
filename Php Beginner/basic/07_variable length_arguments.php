<?php
function add(...$num){
    $sum=0;
    foreach($num as $value)
    {
        $sum+=$value;
    }
    return $sum;

}
echo add(1,2,3,4);
?>
//10s