<?php
// Start the session and get the data
session_start();
if(isset($_SESSION['username'])){
    echo "Welcome " .$_SESSION['username']; 
    echo "<br>";
    echo "and your password is " .$_SESSION['password']; 
    
}
else{
    echo "please login to continue";
}


?>
