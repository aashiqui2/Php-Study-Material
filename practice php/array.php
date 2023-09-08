<?php 
// $name=array("aashiqui","kumar","logesh","varun","dinesh");
//   echo var_dump($name);  
//   echo "<br>";
//   echo print_r($name);
//associated array
// $detail=array("aashiqui"=>21,"kumar"=>20,"logesh"=>20);
// echo $detail["logesh"];
//multidimentional array

$contact=array(
    array("name"=> "ashik","email"=>"ashikmail2747@gmail.com"),
    array("name"=> "kumar","email"=>"peterparker@mail.com"),
    array("name"=> "logesh","email"=>"harrypotter@mail.com"));
// var_dump($contact);
// echo "<br>";
echo $contact[1]["email"];
echo "<br>";
// $name=array("z","a","c","p","r");
$name=array("ashik"=>23,"kumar"=>45,"logesh"=>10);
// krsort($name);
// var_dump($name);
foreach($name as $key=>$value)
{
    echo $key.":".$value."<br>";
}
 ?>