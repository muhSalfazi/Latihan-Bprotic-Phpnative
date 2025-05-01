<?php
namespace A {
    class Car {
        public function getDetails() {
            return "Ini mobil dari namespace A.";
        }
    }
}

namespace B {
    class Car {
        public function getDetails() {
            return "Ini mobil dari namespace B.";
        }
    }
}

namespace {
    use A\Car as CarA;
    use B\Car as CarB;

    $carA = new CarA();
    $carB = new CarB();

    echo $carA->getDetails() . "<br>";
    echo $carB->getDetails();
}
?>
