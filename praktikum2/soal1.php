<?php
// Jumlah lembar fotocopy
$jumlahLembar = 168;

// Inisialisasi harga per lembar
$hargaPerLembar = 0;

// Menentukan harga per lembar berdasarkan jumlah lembar fotocopy
if ($jumlahLembar < 100) {
    $hargaPerLembar = 150;
} elseif ($jumlahLembar >= 100 && $jumlahLembar <= 200) {
    $hargaPerLembar = 100;
} else {
    $hargaPerLembar = 80;
}

// Menghitung total biaya fotocopy
$totalBiaya = $jumlahLembar * $hargaPerLembar;

// Menampilkan total biaya fotocopy
echo "Biaya yang harus dibayarkan untuk fotocopy sebanyak $jumlahLembar lembar adalah Rp. $totalBiaya,-";
?>
