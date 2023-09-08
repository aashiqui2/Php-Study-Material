<?php
$str = array('demo', 'test#$!test');
foreach ($str as $a) {
   if (ctype_alnum($a)) {
      echo "$a consists of all letters or digits. 
";
   } else {
      echo "$a does not have all letters or digits. 
";
   }
}
?>

<!-- The ctype_alnum() function in PHP check for alphanumeric character(s). It returns TRUE if every character in string str is either a letter or a digit, FALSE otherwise. -->