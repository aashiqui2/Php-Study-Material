<?php

//GLOBALS
echo "Welcome to global variable in php<br>";

$c=10;
$d=20;
function numbers(){
    //echo $c;
    $GLOBALS['result']=$GLOBALS['c']+$GLOBALS['d'];
    echo $GLOBALS['result'];
}
numbers();
echo $result;







?>
