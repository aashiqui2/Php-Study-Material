<?php  

// The explode() function breaks a string into an array.

// syntax 
// array explode(separator, OriginalString, NoOfElements)

$str = 'one,two,three,four';

// zero limit
echo "<pre>";
print_r(explode(',',$str,0));
echo "</pre>";

// positive limit
echo "<pre>";
print_r(explode(',',$str,2));
echo "</pre>";

// negative limit
echo "<pre>";
print_r(explode(',',$str,-2));
echo "</pre>";

?>
