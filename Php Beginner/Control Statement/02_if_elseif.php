<?php

$percentage = (int)readline("enter the percentage");

if ($percentage >= 80 && $percentage <= 100) {
    echo "you are in merit";
} elseif ($percentage >= 60 && $percentage < 80) {
    echo "are in IST Division";
} elseif ($percentage >= 45 && $percentage < 60) {
    echo "you are in IIST Division";
} elseif ($percentage >= 33 && $percentage < 45) {
    echo "you are in IIIST Division";
}
elseif($percentage<33){
    echo "you are failed";
}
else{
    echo "please enter valid percentage";
}
