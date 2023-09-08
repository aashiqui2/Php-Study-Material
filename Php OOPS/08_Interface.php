<?php
//we cannot create instance for interfaec and also constructor cannot be created
interface Vehicle {
    public function vehicleType();
}

interface Car {
    public function name();
}

class Ferrari implements Vehicle, Car  {
    public function vehicleType() {
        return "4 wheeler";
    }

    public function name() {

        return "Ferrari";
    }
}
$ferrari = new Ferrari();
echo "Vehicle Type: " . $ferrari->vehicleType() . "</br>";
echo "Vehicle Name: " . $ferrari->name();
