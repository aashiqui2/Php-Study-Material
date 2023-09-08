<?php
// Parent class

//we can create constructor for abstract not for interface
abstract class Fruit {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function printName():string;

}
// Child classes
class Apple extends Fruit {
    public function printName() :string{

        return "I am $this->name!";     
    }
}
class Mango extends Fruit {
    public function printName() : string{
        return "I am $this->name!";
    }   
}

$apple = new Apple("Apple");
echo $apple->printName();
echo "<br>";
$mango = new Mango("Mango");
echo $mango->printName();
echo "<br>";

?>
<!-- <?php  
//we cannot create object
//abstract means uncomplete method
//we  only declare
abstract class ParentClass{
    public $name;
    abstract protected function calc($a,$b);    

}

class ChildClass extends ParentClass{
    
    public function calc($c,$d){
        echo $c+$d;
    }

}
$test=new ChildClass();
$test->calc(10,20);

// $test=new ParentClass();//cannot instance abstract class


?> -->