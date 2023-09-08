<?php 
    echo "What is Inheritance?<br>";
    class Employee2{

        public $name = "harry";
        private $salary = 12000;
        private $grade = 3;

        function setSalary($salary){
            $this->salary = $salary; 
        }

        function getSalary(){ 
            echo "The salary of employee is $this->name is $this->salary <br>";
        }

        function showName(){
            echo "The name of this employee is $this->name <br>";
        }
    }

    // Inheriting a new class Programmer from Employee
    class Programmer extends Employee2{
        private $language = "php";

        function changeLanguage($lang){
            $this->language = $lang; 
            // echo $this->grade; 
            // --> This will throw an error because grade is private in the parent class
        }
    }

    $rohan = new Employee2();
    $rohan->name = "Rohan";
    $rohan->setSalary(100);
    $rohan->getSalary();
    $rohan->showName();

    $shubham = new Employee2();
    $shubham->name = "Shubham";
    $shubham->setSalary(10000000);
    $shubham->getSalary();
    $shubham->showName();

    $geeta = new Programmer();
    $geeta->name = "Geeta";
    $geeta->changeLanguage("Python");
    $geeta->getSalary();
    $geeta->showName();

?>