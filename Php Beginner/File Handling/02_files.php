<?php


//fopen

$mydata=fopen("notes.txt","r");

//to find the file size use this method
// $filesize=filesize("notes.txt");

//entire thing will be prinrted in one paragraph
// echo fread($mydata,$filesize);

// The fgets() function is used to read a single line from a file.
// echo fgets($mydata);


// The feof() function checks if the "end-of-file" (EOF) has been reached.
// The feof() function is useful for looping through data of unknown length.
while(!feof($mydata)){
    // print line by line 
    // echo fgets($mydata);
    
    //get character by character
    echo fgetc($mydata);
    // echo "<br>";

}
fclose($mydata);

//fread will have two parameters fread(filemode ,and filesize)

// readfile("myfile.txt");
// readfile("1.png");
// readfile("bootstrap.html");

?>
