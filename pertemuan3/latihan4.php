<?php
class Student {
    public $namalengkap;
    public $umur;
    public $hobi;
    public $status;

    public function __construct($namalengkap, $umur, $hobi, $status) {
        $this->namalengkap = $namalengkap;
        $this->umur = $umur;
        $this->hobi = $hobi;
        $this->status = $status;
    }
    public function cetakBiodata() {
        return "Nama Lengkap: $this->namalengkap<br>" .
            "Umur: $this->umur<br>" .
            "Hobi: $this->hobi<br>" .
            "Status: $this->status";}
    }

    $Student = new Student( "Budi Santoso", 20, "Membaca", "Mahasiswa");
    echo $Student->cetakBiodata();
?>