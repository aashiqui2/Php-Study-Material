<?php

class Box
{
    public $width;
    public $height;
    public $depth;

    function __construct($width, $height, $depth)
    {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }
    public function volume()
    {
        echo $this->width."<br>";
        echo $this->height."<br>";
        echo $this->depth."<br>";

        return  $this->width *  $this->height *  $this->depth;
    }
}
class BoxWeight extends Box
{
    public $mass;
    function __construct($width, $height, $depth, $mass)
    {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->mass = $mass;
    }
    public function density()
    {
        

        return  $this->volume() * $this->mass;
    }
}

$boxWeight = new BoxWeight(10, 20, 30, 40);
$result=$boxWeight->density();
echo $result;
?>
