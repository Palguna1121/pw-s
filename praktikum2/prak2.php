<?php
include "header.php";
?>
                <div style="color: black" class="container-fluid font-weight-bold">
<?php
echo "<h2>Nilai Mahasiswa : </h2>";
$nim = '10101001';
$nama = 'Agung Dimas';
$prodi = 'Sistem Komputer';
$nilai = 90;
echo "NIM : ", $nim, "<br>";
echo "Nama : ", $nama, "<br>";
echo "Prodi : ", $prodi, "<br>";
echo "Nilai : $nilai";
?>
</div>

<?php
include "footer.php";
?>