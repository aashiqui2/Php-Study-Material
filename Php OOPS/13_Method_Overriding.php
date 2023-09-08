<?php  

class A{
    public $name;
    public $age;
    function __construct($name,$age)
    {
        echo "iam  parent constructor<br>";
        $this->name=$name;
        $this->age=$age;
    }
    function get_name(){
        return $this->name;
    }
    function get_age(){
        return $this->age;
    }
    function message(){
        echo "i am message from parent<br>";

    }

}
class B extends A{
    public $name;
    public $age;

    function __construct()
    {
        echo "iam child constructor<br>";
    
    }

    
    // function get_name(){
    //     return $this->name;
    // }
    // function get_age(){
    //     return $this->age;
    // }
    function message(){
        echo "i am message from child<br>";

    }

}
// when we create a object, it will call the default constructor even it has a parameterized object creation.
$performaction=new B();//child constr
$performaction=new B("aashiqui",23);//child constrctor
$performaction->message();
?>