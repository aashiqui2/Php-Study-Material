<?php
//when a cass is final we cannot extends it 
// final class Fruit {
    // some code
// }

// will result in error

// class Strawberry extends Fruit {

//     // some code
// }
class Colour {

    final public function printColourname($colour) {
        echo "Colour : ". $colour;
    }
}
class Red extends Colour {

    public function printColourname($colour) { //Fatal Error, cannot override final funtion
        echo "Colour : ". $colour;
    }

}


?>