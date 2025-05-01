<?php

class Vehicle {
    public function move() {
        echo "Kendaraan sedang bergerak. <br>";
    }
}

class Car extends Vehicle {
    public function move() {
        echo "Mobil melaju di jalan.";
    }
}

$kendaraan = new Vehicle();
$kendaraan->move();

$car = new Car();
$car->move();

?>
