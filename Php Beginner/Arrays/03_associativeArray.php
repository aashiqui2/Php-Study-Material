<?php

echo "Welcome to associative arrays in php <br>";


// Associative arrays
$favCol = array('shubham' => 'red','rohan'=> 'green',
                    'harry'=> 'brown', 8=>'this' );


                    //this will print the values 
                    // echo $favCol['harry'];
                    // echo "<br>";
                    // echo $favCol['rohan'];
                    // echo "<br>";
                    // echo $favCol[8]; 

foreach ($favCol as $key => $value) {
    echo "<br>Favorite color of $key is $value";
}

?>
