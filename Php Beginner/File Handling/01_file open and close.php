<?php

$filename="notes.txt";
$fptr = fopen($filename, "r");
// echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file.Please enter a valid filename");
}
$content = fread($fptr, filesize("notes.txt"));
// $content = fread($fptr, 5);
fclose($fptr);
echo $content;

?>
