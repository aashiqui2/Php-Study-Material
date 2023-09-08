<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database="dbharry";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Create a table in db
$sql="CREATE TABLE `PHPtrip` (`SNO` INT(6) NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(12) NOT NULL , `DEST` VARCHAR(6) NOT NULL , PRIMARY KEY (`SNO`))";
$result = mysqli_query($conn, $sql);

// Check for the TABLE creation success
if($result){
    echo "The TABLE was created successfully!<br>";
}
else{
    echo "The TABLE was not created successfully because of this error ---> ". mysqli_error($conn);
}
  
?>
