<?php

// Writing to a file in php
echo "Welcome to write files in php<br>";
// $fptr = fopen("writing.txt", "w");
// fwrite($fptr, "This is the best file on this planet. Please dont argue with me on this one.\n"); 
// fwrite($fptr, "This is another content\n"); 
// fwrite($fptr, "This is another content3"); 
// fclose($fptr);


// Appending to a file in php
// $fptr = fopen("writing.txt", "a");
// fwrite($fptr, "This is being appended to the file\n"); 
// fclose($fptr);

//fOpen()
//this will truncate(delete) the content
$mynewfile=fopen("truncate.txt","w");
echo $mynewfile;
// then write the content on the file. 
$text="aashiqui bhai";
fwrite($mynewfile,$text);

fclose($mynewfile);

?>
