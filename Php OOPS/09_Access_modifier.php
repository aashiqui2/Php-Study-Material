<?php  


echo " <h1 style='text-align:center'>Access Modifier</h1>";

//public -->we can access the variable and the function anywhere inside the programs
//private --> only within the class
//protected-->only within the class and the class which are derived from the class only those variables and methods can be accessed 

class vegetable{
    protected $name;
    public $color;
    public function set_name($name){
        $this->name=$name;

    }
    protected function get_name(){
     return $this->name;

    }
}

$brinjal=new vegetable();
$brinjal->set_name("brinjal");
// echo $brinjal->get_name();
echo "<br>";
?>

<!-- // Access modifiers in Php
    // 1. Public - can be accessed from anywhere
    // 2. Private - can only be accessed from within the class
    // 3. Protected - can be accessed from withing the class and from derived class

    // By default the properties and methods are treated as public
    // Private properties and methods can only be accessed by other member functions of the class -->