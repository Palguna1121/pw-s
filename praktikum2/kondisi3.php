<?php
include "header.php";
?>
                <!-- Begin Page Content -->
                <div style="color: black" class="container-fluid font-weight-bold">
<?php
$nilai = 60;
if($nilai >= 90){
 echo "Nilai Memuaskan";
}elseif ($nilai >= 80){
 echo "Nilai Bagus";
}elseif($nilai >=50){
 echo "Nilai Kurang";
}else{
 echo "Nilai Sangat Kurang";
}
?>

</div>
<?php
include "footer.php";
?>