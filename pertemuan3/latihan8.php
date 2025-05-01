<?php

class User {
    // Properti private untuk menyimpan password
    private $password;

    // Setter: menyimpan password dengan hashing
    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    // Getter: mengambil hash password (bukan password aslinya)
    public function getPassword() {
        return $this->password;
    }

    // Verifikasi: mengecek apakah input password cocok
    public function verifyPassword($inputPassword) {
        return password_verify($inputPassword, $this->password);
    }
}

// Contoh penggunaan:
$user = new User();
$user->setPassword("rahasia123");

echo "Password:" . $user->getPassword() . "<br>";

if ($user->verifyPassword("rahasia123")) {
    echo "Password cocok!";
} else {
    echo "Password salah!";
}

?>
