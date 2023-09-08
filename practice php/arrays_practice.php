<?php
//linerar array
// $age=array("ashik","babu","rafiq");
// echo "My name is $age[0]"."<br>"." My father name is $age[1]"."<br>"." My bro name is $age[2]";

//associative array
// $b=array("name"=>"ashik","age"=>"21","department"=>"MCA");
// echo "my name is ".$b["age"];

//Multi dimentional Array
$c=array(array("name"=>"ashik","age"=>"21","department"=>"MCA"),
array("name"=>"kumar","age"=>"22","department"=>"MCA"),
array("name"=>"rafiq","age"=>"25","department"=>"MCA"));
echo "MY age is ".$c[0]["age"];
?>