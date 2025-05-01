<?php
class StudentGrade {
    public $score;

    public function __construct($score) {
        $this->score = $score;
    }

    public function check() {
        if ($this->score >= 75) {
            echo "Lulus";
        } else {
            echo "Tidak Lulus";
        }
    }
}

$studentGrade = new StudentGrade(80);
$studentGrade->check();


?>