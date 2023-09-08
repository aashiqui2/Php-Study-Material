<?php

$fptr = fopen("notes.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr); 
// echo var_dump(fgets($fptr));


// Reading a file line by line
// while($a=fgets($fptr)){
//     echo $a;
//     echo "<br>";
// }
// echo "<br>End of the file has been reached";




// Reading a file character by character
// while($a=fgetc($fptr)){
//     //if a character is 0 then it stop moving the pointer. (fgetc)
//     echo $a;    
//     // break;
// }
// echo "<br>End of the file has been reached";

// Write a program which reads the content of a file until . has been encountered
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}


fclose($fptr);

?>
