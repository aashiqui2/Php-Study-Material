<?php  


$food=array('orange','banana','apple','grapes','55');
$food=array('a'=>'orange','b'=>'banana','c'=>'apple','d'=>'grapes','e'=>'55');
echo array_search('apple',$food);

// in indexed array it will return the index position 
//in assocoative array it will return the key
//we cannot use key for search in associative array



?>