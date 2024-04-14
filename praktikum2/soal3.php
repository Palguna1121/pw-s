<?php

// Membuat array asosiatif
$buah = array(
    "apel" => 50,
    "jeruk" => 30,
    "pisang" => 40,
    "mangga" => 60,
);

// Fungsi pengurutan
// 1. Mengurutkan array berdasarkan nilai (menaik)
asort($buah);
print_r($buah);

// 2. Mengurutkan array berdasarkan kunci (menaik)
ksort($buah);
print_r($buah);

// 3. Mengurutkan array berdasarkan nilai (menurun)
arsort($buah);
print_r($buah);

// 4. Mengurutkan array berdasarkan kunci (menurun)
krsort($buah);
print_r($buah);

// Implementasi 5 fungsi array lainnya
// 1. array_push() - Menambahkan elemen baru pada akhir array
// array_push() tidak dapat digunakan pada array asosiatif, gunakan cara berikut
$buah['durian'] = 70;
print_r($buah);

// 2. array_pop() - Menghapus elemen terakhir dari array
// array_pop() tidak dapat digunakan secara langsung untuk menghapus elemen berdasarkan kunci pada array asosiatif
// Sebagai alternatif, gunakan cara berikut
end($buah); // Pindah pointer ke elemen terakhir
unset($buah[key($buah)]); // Hapus elemen terakhir
print_r($buah);

// 3. array_shift() - Menghapus elemen pertama dari array
array_shift($buah);
print_r($buah);

// 4. array_unshift() - Menambahkan satu atau lebih elemen ke awal array
// array_unshift() tidak dapat digunakan pada array asosiatif, gunakan cara berikut
$buah = array_merge(array("semangka" => 20), $buah);
print_r($buah);

// 5. array_key_exists() - Mengecek apakah sebuah kunci ada di dalam array
if (array_key_exists("apel", $buah)) {
    echo "Kunci 'apel' ada di dalam array";
} else {
    echo "Kunci 'apel' tidak ada di dalam array";
}

?>
