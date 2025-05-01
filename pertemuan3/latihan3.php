<?php
class MathOperation {
    public $a;
    public $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function add() {
        return $this->a + $this->b;
    }
    public function subtract() {
        return $this->a - $this->b;
    }

    public function multiply() {
        return $this->a * $this->b;
    }
    public function divide() {
        if ($this->b != 0) {
            return $this->a / $this->b;
        } else {
            return "Tidak dapat dibagi dengan nol!";
        }
    }
}

$operation = new MathOperation(10, 5);
echo "Hasil penjumlahan: " . $operation->add() . "<br>";
echo "Hasil pengurangan: " . $operation->subtract() . "<br>";
echo "Hasil perkalian: " . $operation->multiply() . "<br>";
echo "Hasil pembagian: " . $operation->divide() . "<br>";
?>