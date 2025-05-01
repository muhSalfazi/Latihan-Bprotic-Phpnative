<?php

class Mobil {
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getDetails(): string {
        return "Brand: {$this->brand}, Model: {$this->model}, Year: {$this->year}";
    }
}

$car = new Mobil("Toyota", "Corolla", 2020);
echo $car->getDetails();
?>