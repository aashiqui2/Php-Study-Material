<?php

// Input array
$arr = array('1', '3', 'P');

// end function print the last
// element of the array.
echo end($arr)."\n";

// end() updates the internal pointer
// to point to last element as the
// current() function will now also
// return last element
echo current($arr);
?>
