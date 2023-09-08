<?php  

// To access the static members outside the class it is not necessary to create the object for class. Below is the syntax to access static members.

// ClassName::memberName;

// Inside same class static members are accessed using self keyword.

// self::memberName;

// Inside subclass static members are accessed using parent keyword.

// parent::memberName;
class Employee {
    public static $name;
    public static function pritnName () {
        echo self::$name;
    }
}
class Developer extends Employee {
    public static function printDeveloperName () {
        echo parent::$name;
    }
}

//Create any number of objects for class, there will be only one copy of static members for entire application
$developer1 = new Developer();
$developer2 = new Developer();
$employee1 = new Employee();
$employee2 = new Employee();
Employee::$name = "Manu Manjunatha";
Employee::pritnName(); //Prints Manu Manjunatha
echo "<br>";
Developer::printDeveloperName(); //Prints Manu Manjunatha
?>


