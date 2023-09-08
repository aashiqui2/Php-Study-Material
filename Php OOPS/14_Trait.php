<?php
trait Apple1 {
    public function fruit1() {
      echo "I am Apple";
    }
}
trait Mango1 {

    public function fruit2() {
        echo "I am Mango";
    }
}
class Fruit1 {
    use Apple1, Mango1 ;
}
class AppleFruit1 {
    use Apple1;
}
$obj = new Fruit1();
$obj->fruit1();
echo "<br>";
$obj->fruit2();
echo "<br>";
$obj2 = new AppleFruit1();
$obj2->fruit1();

?>