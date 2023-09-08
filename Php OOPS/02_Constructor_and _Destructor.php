<?php  
 // Constructor - It allows you to initialize objects. It is the code which is executed whenever a new object is instantiated.

class Book{
    public $author;
    public $noofpages;

    // //constructor without arguments like this   __construct() 
    // function __construct()
    // {
    //     echo "i am constructor and i am executed successfully <br>";
        
    // }

    //    constructor with arguments
    function __construct($author,$noofpages)
    {
        $this->author=$author;
        $this->noofpages=$noofpages;
        echo "i am constructor and i am executed successfully<br>";
        
    }
    function get_name(){
        return $this->author;
  
    }
    function get_page(){
   
        return $this->noofpages;
    }

    //destructor
    // A destructor is called when the object is destructed or the script is stopped or exited.
    // PHP will automatically call this function at the end of the script.
    function __destruct()
    {
        echo "<br>";
        echo "i am destroyed ($this->author,$this->noofpages)";
    }
}
$computerscience =new Book("computer science1",255);
$pythonbook =new Book("python book1",230);

echo $computerscience->get_name();
echo "<br>";
echo $computerscience->get_page();
echo "<br>";
echo $pythonbook->get_name();
echo "<br>";
echo $pythonbook->get_page();


// $computerscience =new Book();
// echo "<br>";
// $computerscience =new Book();
// echo "<br>";
// $computerscience =new Book();
// echo "<br>";


?>