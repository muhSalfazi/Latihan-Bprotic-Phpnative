<?php

class Counter {
    // Properti statis
    private static int $count = 0;

    // Method statis untuk menambah count
    public static function increment(): void {
        self::$count++;
    }

    // Method non-statis untuk mengambil nilai count
    public function getCount(): int {
        return self::$count;
    }
}

// Contoh penggunaan
Counter::increment(); // count = 1
Counter::increment(); // count = 2

$counter = new Counter();
echo "Nilai count saat ini: " . $counter->getCount();
