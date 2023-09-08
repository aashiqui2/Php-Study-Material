<!-- classes :its is just a template and using this classes multiple object can be created  -->
<!-- Object: it is a instance of classes -->

<!-- syntax of class -->
<?php  
echo "<H1> PHP OOPS</H1>";

class Bike
{
    //properties is nothing but variable
    public $name;
    public $color;

    //methods
    public function setname($name){
        $this->name=$name;//current object

    } 
    public function get_name(){
        return $this->name;

    }
    public function set_color($color){
        $this->color=$color;//current object

    } 
    public function get_color(){
        return $this->color;

    }
}
///syntax for creating object
$honda=(new BIke);
$activa=new BIke();

var_dump($activa instanceof Bike);
echo "<br>";
$honda->setname("honda");
// $honda->name="KTM";
$honda->set_color("blue");

echo $honda->get_name();
echo "<br>";
echo $honda->get_color();
echo "<br>";

$activa->setname("activa");
$activa->set_color("green");

echo "<br>";
echo $activa->get_name();
echo "<br>";
echo $activa->get_color();

echo "<br>";

$activa->setname("activa1");

echo "<br>";
echo $activa->get_name();

$activa->setname("activa2");

echo "<br>";

echo $activa->get_name();
echo "<br>";

//instanecof

var_dump($activa instanceof BIKE);


?>