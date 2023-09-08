<?php 
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
//referesh
// variable can be inserted in the table 
$name="diviya";
$destination="chennai";
// insert a value in table
$sql="INSERT INTO `phptrip` ( `NAME`, `DEST`) VALUES ('$name', '$destination')";
$result=mysqli_query($conn,$sql);

// Check for the value is inserted success
if($result){
    echo "The values was inserted successfully!<br>";
}
else{
    echo "The values was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>