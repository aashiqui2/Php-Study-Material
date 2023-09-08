<?php
class Aves {
    public function nature() {
        echo "Generally, Aves fly";
    }
}

class Parrot extends Aves {
    public function eat() {
       echo "Parrot eats fruits and seeds";
    }
}
class Vulture extends Aves {
    public function vision() {
        echo "Vulture can see from high altitudes";
    }
}

?>  