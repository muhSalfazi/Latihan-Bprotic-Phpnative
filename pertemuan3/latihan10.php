<?php

// Interface Flyable
interface Flyable {
    public function fly(): string;
}

// Kelas Bird mengimplementasikan Flyable
class Bird implements Flyable {
    public function fly(): string {
        return "Burung terbang tinggi di langit.";
    }
}

// Kelas Plane mengimplementasikan Flyable
class Plane implements Flyable {
    public function fly(): string {
        return "Pesawat terbang melintasi awan.";
    }
}

// Contoh penggunaan
$burung = new Bird();
$pesawat = new Plane();

echo $burung->fly() . "<br>";
echo $pesawat->fly();
