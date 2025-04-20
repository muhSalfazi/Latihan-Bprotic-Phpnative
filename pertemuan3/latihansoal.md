
# Latihan Studi Kasus OOP dalam PHP

Latihan ini bertujuan untuk mengasah pemahaman dasar tentang **Object-Oriented Programming (OOP)** dalam PHP, terutama dalam penggunaan **kelas**, **objek**, **inheritance**, **polimorfisme**, **enkapsulasi**, dan **abstraksi**.

---

## 1) Perbaiki dan rapikan kode berikut agar bisa berjalan dengan benar:

```php
<?php
class Car {
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getDetails() {
        return "Brand: $this->brand, Model: $this->model, Year: $this->year";
    }
}

$car = new Car("Toyota", "Corolla", 2020);
echo $car->getDetails();
?>
```

---

## 2) Perbaiki dan rapikan kode berikut agar bisa menghasilkan output yang benar:

```php
<?php
class Book {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getDetails() {
        return "Title: $this->title, Author: $this->author";
    }
}

$book = new Book("PHP for Beginners", "John Doe");
echo $book->getDetails();
?>
```

---

## 3) Perbaiki dan rapikan kode berikut untuk menampilkan hasil operasi aritmatika:

```php
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
}

$operation = new MathOperation(10, 5);
echo "Hasil penjumlahan: " . $operation->add();
?>
```

---

## 4) Studi Kasus: Biodata Siswa dengan OOP

Buatlah kelas `Student` yang berisi properti dan method untuk mencetak biodata siswa, yang terdiri dari:
- Nama Lengkap
- Umur
- Hobi
- Status

**Ketentuan:**
- Gunakan variabel untuk setiap elemen biodata.
- Output biodata ditampilkan menggunakan method.

---

## 5) Studi Kasus: Penilaian Ujian dengan OOP

Buatlah kelas `StudentGrade` untuk menilai nilai ujian siswa:
- Nilai ujian disimpan dalam properti.
- Jika nilai ≥ 75, tampilkan "Lulus".
- Jika nilai < 75, tampilkan "Tidak Lulus".

---

## 6) Studi Kasus: Pewarisan (Inheritance)

Buatlah kelas `Vehicle` dengan method `move()`. Kemudian buat kelas turunan `Car` yang mengoverride method `move()` untuk memberikan output berbeda.

---

## 7) Studi Kasus: Namespace dan Import
Buatlah dua namespace yang berbeda: A dan B. Masing-masing namespace memiliki kelas Car dengan method getDetails(). Gunakan use untuk mengimpor kelas tersebut dan tampilkan detail mobil dari masing-masing namespace.

---

## 8) Studi Kasus: Encapsulation(setter-getter)

Buatlah kelas `User` dengan properti private `password`. Implementasikan setter dan getter untuk `password` agar dapat diubah dan diambil nilainya dengan aman.


---

## 9) Studi Kasus: Method dan Method Statis

Buatlah kelas Counter dengan properti statis count dan method statis increment() yang menambah nilai count sebanyak 1. Tambahkan method non-statis getCount() untuk mengambil nilai count.

---

## 10) Studi Kasus: Interface

Buatlah interface `Flyable` dengan method `fly()`. Kemudian buat kelas `Bird` dan `Plane` yang mengimplementasikan interface ini.


---
