<?php

// include '_dbconnect.php';
require '27_dbconnect.php';
echo"this<br>";
//Difference between include and require 
// suppose if a file is not present and we are trying to  incldue it,  it will generate a error.and the remaining all code will be executed
// if we require the file which is not present it will stop the execution and it will not execute the code.
//



$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
while($row = mysqli_fetch_assoc($result)){ 
    echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
    echo "<br>";
}
?>


