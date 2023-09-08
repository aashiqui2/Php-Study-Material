<?php

echo " <h1 style='text-align:center'>Inheritance</h1>";

// inheritance: the child class which are derived from the parent class they can access all the method and varibale from the parents and the child can have extra properties and methods as well.

// if you dont want classes to access all the property and method from the parent class then we can give the final keyword to the parent class this will not alow you to extend child class
// final class Parent1

 class Parent1
{

    public $surname;
    public $weight;
    const HELLO="IAM AASHIQI<br>";

    //  function set_name($surname){
    //     $this->surname=$surname;
    //  }
    function __construct($surname, $weight)
    {
        echo "this is construtor<br>";
        $this->surname = $surname;
        $this->weight = $weight;
    }
    function get_name()
    {
        return $this->surname;
    }
     protected function get_weight()
    {
        return $this->weight;
    }

    function message(){
        echo "i am from parent<br>";
        echo self::HELLO;
    }
}


class Child1 extends Parent1
{
    function painting()
    {
        //super
        echo "i know painting";
        echo "<br>";
        return $this->get_weight();
    }
    
    function message(){//method ovverriding
        echo "i am from child ";
    }
}
echo Parent1::HELLO;//::scope resolution operator

$child1 = new Child1("aashiqui", 25);

echo $child1->painting();
echo "<br>";
// echo $child1->set_name("aashiqui");
// echo "<br>";
echo $child1->get_name();
echo "<br>";
// echo $child1->get_weight();this method call  is protected in parent method
echo "<br>";
echo $child1->message();


?>
