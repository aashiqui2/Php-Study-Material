<?php
class Box {

    public $width;
    public $height;
    public $depth;

    function __construct($width, $height, $depth) {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;

    }
    public function volume () {
        return  $this->width *  $this->height *  $this->depth;
    }
}

class BoxWeight1 extends Box {
   public $mass;
    public function density () {
        return  $this->volume () * $this->mass;
    }
}

$boxWeight = new BoxWeight1(10, 20, 30);
$boxWeight->mass = 40;
echo $boxWeight->density();
 

?>